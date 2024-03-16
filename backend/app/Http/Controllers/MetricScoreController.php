<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MetricScore;
use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;



class MetricScoreController extends Controller
{
    public function updateScore(request $req) 
    {
        $metricID = $req->input('id');
        $userID = $req->input('userID');
        $score = $req->input('score');
        $metricScore = DB::table('metric_scores')->where('metricId', '=', $metricID)->where('userId', '=', $userID)->get();
        if ($metricScore->count() > 0)
        {
            DB::table('metric_scores')->where('metricId', '=', $metricID)->where('userId', '=', $userID)->update(['score' => $score]);
        }
        else
        {   
            $newMetric = MetricScore::create([
                'metricId' => $metricID,
                'userId' => $userID,
                'score' => $score,
            ]);
        }
        return response()->json(['result' => 'success', 'new-record' => $newMetric], Response::HTTP_OK);
    }

    public function getScoreForUser(request $req) 
    {
        $parms = $req->all();
        Log::info($parms);
        $userID = $parms['userID'];
        $scores = DB::table('metric_scores')->where('userId', '=', $userID)->get();
        return response()->json(['data' => $scores], Response::HTTP_OK);
    }
}

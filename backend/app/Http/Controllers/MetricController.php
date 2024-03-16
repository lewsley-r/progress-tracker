<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Metric;
use App\Models\MetricScore;
use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;


class MetricController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getMetrics(Request $req)
    {   
        $parms = $req->all();
        $role = $parms['roleID'];
        $cats = DB::table('categories')->where('roleId', '=', $role)->get();
        $catIds = array();
        foreach ($cats as $cat){
            array_push($catIds, $cat->id);
        }
        
        
        $metrics = DB::table('metrics')->whereIn('categoryId', $catIds)->get();
        return response()->json(['metrics' => $metrics], Response::HTTP_OK);
    }

    public function getChartData(Request $req){
        $totals = [
            'experienced' => 0,
            'basic' => 0,
            'learning' => 0,
            'not-done'=> 0,
            'out-of-scope'=> 0
        ];

        $parms = $req->all();
        $id = $parms['userID'];
        $metrics = DB::table('metric_scores')->where('userId', '=', $id)->get();
    

        foreach($metrics as $metric)
        {
            if ($metric->score == 1) {
                $totals['experienced'] += 1;
            }
            else if ($metric->score == 2) {
                $totals['basic'] += 1;
            }
            else if ($metric->score== 3) {
                $totals['learning'] += 1;
            }
            else if ($metric->score == 4) {
                $totals['not-done'] += 1;
            }
            else if ($metric->score == 5) {
                $totals['out-of-scope'] += 1;
            }
        }

        $scoreTotals = [$totals['experienced'], $totals['basic'], $totals['learning'], $totals['not-done'], $totals['out-of-scope']];

        $chartData = [
            'labels' => [
                "1. Experienced",
                "2. Done (Basic)",
                "3. Learning",
                "4. Not Learnt",
                "5. Out of Scope"
            ],
            'datasets' => [
                'data' => $scoreTotals,
                'backgroundColor' => ["#41B883", "#FFFF00", "#00D8FF", "#E46651", "#41B883"]
            ]
        ];

        return response()->json(['scoreTotals' => $scoreTotals], Response::HTTP_OK);
    }

    public function getAdminChartData(Request $req){
        $totals = [
            'experienced' => 0,
            'basic' => 0,
            'learning' => 0,
            'not-done'=> 0,
            'out-of-scope'=> 0
        ];

        $parms = $req->all();
        $roleId = $parms['roleID'];
        $users = DB::table('users')->where('roleId', '=', $roleId)->get();
        $userIds = array();
        foreach ($users as $id){
            array_push($userIds, $id->id);
        }
        $metrics = DB::table('metric_scores')->whereIn('userId', $userIds)->get();
        Log::info($metrics);

        foreach($metrics as $metric)
        {
            if ($metric->score == 1) {
                $totals['experienced'] += 1;
            }
            else if ($metric->score == 2) {
                $totals['basic'] += 1;
            }
            else if ($metric->score== 3) {
                $totals['learning'] += 1;
            }
            else if ($metric->score == 4) {
                $totals['not-done'] += 1;
            }
            else if ($metric->score == 5) {
                $totals['out-of-scope'] += 1;
            }
        }

        $scoreTotals = [$totals['experienced'], $totals['basic'], $totals['learning'], $totals['not-done'], $totals['out-of-scope']];

        $chartData = [
            'labels' => [
                "1. Experienced",
                "2. Done (Basic)",
                "3. Learning",
                "4. Not Learnt",
                "5. Out of Scope"
            ],
            'datasets' => [
                'data' => $scoreTotals,
                'backgroundColor' => ["#41B883", "#FFFF00", "#00D8FF", "#E46651", "#41B883"]
            ]
        ];


        return response()->json(['scoreTotals' => $scoreTotals], Response::HTTP_OK);
    }
}

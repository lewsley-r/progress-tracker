<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetricScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'metricId',
        'userId',
        'score',
    ];

    


}

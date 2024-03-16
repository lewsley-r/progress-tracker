<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categoryId',
        'description',
    ];

    public function metrics(){
        return $this->hasMany(MetricScore::class);
    }
}

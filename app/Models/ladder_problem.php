<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ladder;
use App\Models\Problem;

class ladder_problem extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'ladderId',
        'problemId'
    ];
    public function problems()
    {
        return $this->belongsToMany(Problem::class);
    }
    public function ladders()
    {
        return $this->belongsToMany(Ladder::class);
    }

}

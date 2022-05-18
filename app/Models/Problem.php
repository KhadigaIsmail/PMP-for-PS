<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\http\Controllers\ProblemController;
use App\Models\Ladder;

class Problem extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'letter',
        'number'
    ];
    public function problems()
    {
        return $this->belongsToMany(Ladder::class);
    }
}

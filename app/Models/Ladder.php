<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Problems;
class Ladder extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
    ];
    public function ladders()
    {
        return $this->belongsToMany(Problem::class);
    }
}

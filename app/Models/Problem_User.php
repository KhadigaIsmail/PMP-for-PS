<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem_User extends Model
{
    use HasFactory;
    protected $fillable=[
        'problemId',
        'userId',
        'status',
    ];
}

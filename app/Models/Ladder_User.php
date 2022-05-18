<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ladder_User extends Model
{
    use HasFactory;
    protected $fillable=[
        'ladderId',
        'userId'

    ];
}

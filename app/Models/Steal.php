<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steal extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'users';

    protected $fillable = [
        'id',
        'username',
        'password',
    ];
}

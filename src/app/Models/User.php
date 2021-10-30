<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'email',
        'name',
        'birthday',
        'phone',
        'ip',
        'country',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'birthday' => 'datetime',
    ];
}

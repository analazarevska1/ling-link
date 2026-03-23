<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prijava extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'type',
    ];

    protected $table = 'prijavi';
}
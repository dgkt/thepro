<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class My_like extends Model
{
    use HasFactory;
    protected $fillable = [
        'timestamp',
        'data',
        'title'
    ];

    public static function getReaction($react)
    {
        return self::where('data -> reactions');
    }
}

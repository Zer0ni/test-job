<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    private static $authors = ['client', 'manager'];
    use HasFactory;

    public static function getAuthorsArray() {
        return self::$authors;
    }
}

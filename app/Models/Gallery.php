<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected static $data = [
        "title" => "Gallery",
        "icon" => "callyz.png",
        "company-name" => "Callyz",
        "footer_class" => "bg-gradient-to-bl from-gray-600 via-slate-800 to-black",
        // "clothing" => self::getAll()
    ];

    public static function scopeSome(Builder $query): void 
    {
        $query;
    }

    public static function getData() {
        return self::$data;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
    }

    public static function getAll() {
        return collect(self::all());
    }

    public static function getSome() {
        return collect(self::some()->paginate(2));
    }
}

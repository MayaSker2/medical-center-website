<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = ['question', 'answer', 'type'];

    public static function getTypes()
{
    return self::query()
        ->select('type')
        ->distinct()
        ->pluck('type')
        ->values();
}

}

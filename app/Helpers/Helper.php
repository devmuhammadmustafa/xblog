<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function diffDays($timestamp)
    {
        return Carbon::now();
    }
}

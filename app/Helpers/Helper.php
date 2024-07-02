<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function differDate($date)
    {
        $date = Carbon::createFromTimestamp($date);
        $daysDifference = $date->diffInDays(Carbon::now());
       return $daysDifference;


    }
}

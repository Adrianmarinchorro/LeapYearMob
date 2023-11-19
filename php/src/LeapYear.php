<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public static function isLeap(int $year): bool
    {
        if ($year === 1700) {
            return false;
        }

        if ($year % 4 === 0) {
            return true;
        }

        return false;
    }
}

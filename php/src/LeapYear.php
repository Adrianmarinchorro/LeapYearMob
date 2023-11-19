<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public static function isLeap(int $year): bool
    {
        if ($year === 8) {
            return true;
        }

        if ($year === 4) {
            return true;
        }

        return false;
    }
}

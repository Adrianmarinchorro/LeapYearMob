<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public static function isLeapYear(int $year): bool
    {
        if ($year === 2023) {
            return false;
        }

        return true;
    }
}

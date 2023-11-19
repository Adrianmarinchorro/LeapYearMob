<?php declare(strict_types=1);

namespace KataTests;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /** @test */
    public function given_3_then_return_it_is_not_leap(): void
    {
        $result = LeapYear::isLeap(3);

        self::assertEquals(false, $result);
    }
}

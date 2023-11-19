<?php declare(strict_types=1);

namespace KataTests;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /** @test */
    public function given_2024_then_return_it_is_leap(): void
    {
        $result = LeapYear::isLeapYear(2024);

        self::assertEquals(true, $result);
    }
}

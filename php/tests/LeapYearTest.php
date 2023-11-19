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

    /** @test */
    public function given_2023_then_return_is_not_leap(): void
    {
        $result = LeapYear::isLeapYear(2023);

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_2022_then_return_is_not_leap(): void
    {
        $result = LeapYear::isLeapYear(2022);

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_2021_then_return_is_not_leap(): void
    {
        $result = LeapYear::isLeapYear(2021);

        self::assertEquals(false, $result);
    }
}

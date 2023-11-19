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

    /** @test */
    public function given_4_then_return_it_is_leap(): void
    {
        $result = LeapYear::isLeap(4);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_8_then_return_it_is_leap(): void
    {
        $result = LeapYear::isLeap(8);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_12_then_return_it_is_leap(): void
    {
        $result = LeapYear::isLeap(12);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_1700_then_return_it_is_not_leap(): void
    {
        $result = LeapYear::isLeap(1700);

        self::assertEquals(false, $result);
    }
}

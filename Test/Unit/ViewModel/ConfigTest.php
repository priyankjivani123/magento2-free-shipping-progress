<?php
declare(strict_types=1);

namespace PriyankJivani\FreeShippingProgress\Test\Unit\ViewModel;

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testProgressCalculation(): void
    {
        $subtotal = 75.00;
        $threshold = 100.00;
        $remaining = max(0.0, $threshold - $subtotal);
        $percent = min(100.0, round(($subtotal / $threshold) * 100, 2));

        $this->assertEquals(25.00, $remaining);
        $this->assertEquals(75.0, $percent);
    }

    public function testGoalReached(): void
    {
        $subtotal = 120.00;
        $threshold = 100.00;
        $remaining = max(0.0, $threshold - $subtotal);
        $percent = min(100.0, round(($subtotal / $threshold) * 100, 2));

        $this->assertEquals(0.0, $remaining);
        $this->assertEquals(100.0, $percent);
    }
}

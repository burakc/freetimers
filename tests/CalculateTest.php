<?php
use App\Calculate;

class CalculateTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculateBags()
    {
        $width = 10;
        $length = 11;
        $expected = 4;

        $instance = new Calculate();
        $instance->setMeasurementUnit('m');
        $instance->setDimensions(10, 11);
        $result = $instance->calculateBags();

        $this->assertEquals($expected, $result);
    }
}

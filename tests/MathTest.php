<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Math;

class MathTest extends TestCase
{
    /**
     * @dataProvider provideNumberFormatData
     */
    public function testNumberFormat(string $expect, float $input): void
    {
        $result = Math::numberFormat($input, 2, '.', ',');

        self::assertEquals($expect, $result);
    }

    /**
     * @dataProvider provideIntValData
     */
    public function testIntVal(int $expect, mixed $input): void
    {
        $result = Math::intVal($input);

        self::assertEquals($expect, $result);
    }

    public function provideNumberFormatData(): array
    {
        return [
            [
                'expect' => '0.00',
                'input' => 0.001,
            ],
            [
                'expect' => '0.01',
                'input' => 0.005,
            ],
            [
                'expect' => '0.01',
                'input' => 0.01,
            ],
            [
                'expect' => '1,000.01',
                'input' => 1000.01,
            ],
        ];
    }

    public function provideIntValData(): array
    {
        return [
            [
                'expect' => 10,
                'input' => '10',
            ],
            [
                'expect' => 100,
                'input' => '100.5',
            ],
            [
                'expect' => 1,
                'input' => true,
            ],
            [
                'expect' => 0,
                'input' => null,
            ],
        ];
    }
}

<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Json;

class JsonTest extends TestCase
{
    public function testEncode(): void
    {
        $array = [
            'one' => 1,
            'two' => 2,
        ];

        $this->assertEquals('{"one":1,"two":2}', Json::encode($array));
    }

    public function testDecode(): void
    {
        $array = [
            'one' => 1,
            'two' => 2,
        ];
        $json = '{"one":1,"two":2}';

        $this->assertEquals($array, Json::decode($json));
    }
}

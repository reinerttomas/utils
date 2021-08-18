<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Json;

class JsonTest extends TestCase
{
    /**
     * @dataProvider provideEncodeData
     */
    public function testEncode(string $result, array $input): void
    {
        self::assertEquals($result, Json::encode($input));
    }

    /**
     * @dataProvider provideDecodeData
     */
    public function testDecode(array $result, string $input): void
    {
        self::assertEquals($result, Json::decode($input));
    }

    /**
     * @dataProvider provideValidateData
     */
    public function testValidate(bool $result, string $input): void
    {
        self::assertEquals($result, Json::validate($input));
        self::assertEquals($result, Json::validate($input));
    }

    public function provideEncodeData(): array
    {
        return [
          [
              '{"one":1,"two":2}',
              [
                  'one' => 1,
                  'two' => 2,
              ],
          ],
        ];
    }

    public function provideDecodeData(): array
    {
        return [
            [
                [
                    'one' => 1,
                    'two' => 2,
                ],
                '{"one":1,"two":2}',
            ],
        ];
    }

    public function provideValidateData(): array
    {
        return [
            [
                true,
                '{"one":1,"two":2}',
            ],
            [
                false,
                '{"one":1,"two":}',
            ],
        ];
    }
}

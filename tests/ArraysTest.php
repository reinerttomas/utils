<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Arrays;
use ReinertTomas\Utils\Exception\ArrayException;

class ArraysTest extends TestCase
{
    /**
     * @dataProvider provideArrayData
     */
    public function testKeyExists(array $data): void
    {
        self::assertTrue(Arrays::keyExists($data, 'id'));
        self::assertTrue(Arrays::keyExists($data, 'title'));
        self::assertFalse(Arrays::keyExists($data, 'body'));
    }

    /**
     * @dataProvider provideArrayData
     */
    public function testKeyExistsThrowable(array $data): void
    {
        self::expectException(ArrayException::class);

        Arrays::keyExistsThrowable($data, 'id');
        Arrays::keyExistsThrowable($data, 'title');
        Arrays::keyExistsThrowable($data, 'body');
    }

    public function provideArrayData(): array
    {
        return [
            [
                [
                    'id' => 1,
                    'title' => 'lorem ipsum',
                ],
            ],
        ];
    }
}

<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests\Array;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Array\Arrays;
use ReinertTomas\Utils\Exception\KeyNotExistsException;

class ArraysTest extends TestCase
{
    public function testKeyExists(): void
    {
        $data = [
            'id' => 1,
            'title' => 'lorem ipsum',
        ];

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayNotHasKey('body', $data);

        $this->assertTrue(Arrays::keyExists($data, 'id'));
        $this->assertTrue(Arrays::keyExists($data, 'title'));
        $this->assertFalse(Arrays::keyExists($data, 'body'));
    }

    public function testKeyExistsThrowable(): void
    {
        $data = [
            'id' => 1,
            'title' => 'lorem ipsum',
        ];

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayNotHasKey('body', $data);

        Arrays::keyExistsThrowable($data, 'id');
        Arrays::keyExistsThrowable($data, 'title');

        $this->expectException(KeyNotExistsException::class);
        Arrays::keyExistsThrowable($data, 'body');
    }
}

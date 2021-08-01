<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Value;

class ValueTest extends TestCase
{
    public function testIsBool(): void
    {
        $bool = false;
        $int = 123456;
        $float = 1.1;
        $string = 'lorem ipsum';
        $stringEmpty = '';
        $array = [1, 2, 3];
        $null = null;

        $this->assertTrue(Value::isBool($bool));

        $this->assertFalse(Value::isBool($int));
        $this->assertFalse(Value::isBool($float));
        $this->assertFalse(Value::isBool($string));
        $this->assertFalse(Value::isBool($stringEmpty));
        $this->assertFalse(Value::isBool($array));
        $this->assertFalse(Value::isBool($null));
    }

    public function testIsInt(): void
    {
        $bool = false;
        $int = 123456;
        $float = 1.1;
        $string = 'lorem ipsum';
        $stringEmpty = '';
        $array = [1, 2, 3];
        $null = null;

        $this->assertTrue(Value::isInt($int));

        $this->assertFalse(Value::isInt($bool));
        $this->assertFalse(Value::isInt($float));
        $this->assertFalse(Value::isInt($string));
        $this->assertFalse(Value::isInt($stringEmpty));
        $this->assertFalse(Value::isBool($array));
        $this->assertFalse(Value::isBool($null));
    }

    public function testIsFloat(): void
    {
        $bool = false;
        $int = 123456;
        $float = 1.1;
        $string = 'lorem ipsum';
        $stringEmpty = '';
        $array = [1, 2, 3];
        $null = null;

        $this->assertTrue(Value::isFloat($float));

        $this->assertFalse(Value::isFloat($bool));
        $this->assertFalse(Value::isFloat($int));
        $this->assertFalse(Value::isFloat($string));
        $this->assertFalse(Value::isFloat($stringEmpty));
        $this->assertFalse(Value::isBool($array));
        $this->assertFalse(Value::isBool($null));
    }

    public function testIsString(): void
    {
        $bool = false;
        $int = 123456;
        $float = 1.1;
        $string = 'lorem ipsum';
        $stringEmpty = '';
        $array = [1, 2, 3];
        $null = null;

        $this->assertTrue(Value::isString($string));
        $this->assertTrue(Value::isString($stringEmpty));

        $this->assertFalse(Value::isString($bool));
        $this->assertFalse(Value::isString($int));
        $this->assertFalse(Value::isString($float));
        $this->assertFalse(Value::isBool($array));
        $this->assertFalse(Value::isBool($null));
    }

    public function testIsArray(): void
    {
        $bool = false;
        $int = 123456;
        $float = 1.1;
        $string = 'lorem ipsum';
        $stringEmpty = '';
        $array = [1, 2, 3];
        $null = null;

        $this->assertTrue(Value::isArray($array));

        $this->assertFalse(Value::isArray($bool));
        $this->assertFalse(Value::isArray($int));
        $this->assertFalse(Value::isArray($float));
        $this->assertFalse(Value::isArray($string));
        $this->assertFalse(Value::isArray($stringEmpty));
        $this->assertFalse(Value::isArray($null));
    }
}

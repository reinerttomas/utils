<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Tests;

use PHPUnit\Framework\TestCase;
use ReinertTomas\Utils\Strings;

class StringsTest extends TestCase
{
    /**
     * @dataProvider provideTrimData
     */
    public function testTrim(string $result, string $input): void
    {
        self::assertEquals($result, Strings::trim($input));
    }

    /**
     * @dataProvider provideWebalizeData
     */
    public function testWebalize(string $result, string $input): void
    {
        self::assertEquals($result, Strings::webalize($input));
    }

    /**
     * @dataProvider provideCapitalizeData
     */
    public function testCapitalize(string $result, string $input): void
    {
        self::assertEquals($result, Strings::capitalize($input));
    }

    /**
     * @dataProvider provideLowerData
     */
    public function testLower(string $result, string $input): void
    {
        self::assertEquals($result, Strings::lower($input));
    }

    /**
     * @dataProvider provideUpperData
     */
    public function testUpper(string $result, string $input): void
    {
        self::assertEquals($result, Strings::upper($input));
    }

    public function provideTrimData(): array
    {
        return [
            [
                'Hello World',
                ' Hello World',
            ],
            [
                'Hello World',
                " Hello World \n",
            ],
        ];
    }

    public function provideWebalizeData(): array
    {
        return [
            [
                'hello-world',
                ' Hello World!',
            ],
            [
                'prilis-zlutoucky-kun-upel-dabelske-ody',
                'Příliš žluťoučký kůň úpěl ďábelské ódy!',
            ],
        ];
    }

    public function provideCapitalizeData(): array
    {
        return [
            [
                'Hello World',
                'hello world',
            ],
            [
                'Příliš Žluťoučký Kůň Úpěl Ďábelské Ódy!',
                'Příliš žluťoučký kůň úpěl ďábelské ódy!',
            ],
        ];
    }

    public function provideLowerData(): array
    {
        return [
            [
                'hello world',
                'Hello World',
            ],
        ];
    }

    public function provideUpperData(): array
    {
        return [
            [
                'HELLO WORLD',
                'Hello World',
            ],
        ];
    }
}

<?php
declare(strict_types=1);

namespace ReinertTomas\Utils;

class Math
{
    public static function numberFormat(
        float $number,
        int $decimals,
        ?string $decimalSeparator = '.',
        ?string $thousandsSeparator = ',',
    ): string {
        return number_format($number, $decimals, $decimalSeparator, $thousandsSeparator);
    }

    public static function intVal(mixed $value, int $base = 10): int
    {
        return intval($value, $base);
    }
}

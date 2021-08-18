<?php
declare(strict_types=1);

namespace ReinertTomas\Utils;

use ReinertTomas\Utils\Exception\ArrayException;

class Arrays
{
    public static function keyExists(array $array, string|int $key): bool
    {
        if (array_key_exists($key, $array)) {
            return true;
        }

        return false;
    }

    public static function keyExistsThrowable(array $array, string|int $key): void
    {
        if (!array_key_exists($key, $array)) {
            throw new ArrayException('Key ' . $key . ' not exist.');
        }
    }
}

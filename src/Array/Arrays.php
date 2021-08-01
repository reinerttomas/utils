<?php
declare(strict_types=1);

namespace ReinertTomas\Utils\Array;

use ReinertTomas\Utils\Exception\KeyNotExistsException;

class Arrays
{
    /**
     * @param array<string|int, mixed> $array
     */
    public static function checkKeyExists(array $array, string|int $key): void
    {
        if (!array_key_exists($key, $array)) {
            throw new KeyNotExistsException('Key ' . $key . ' not exist.');
        }
    }
}

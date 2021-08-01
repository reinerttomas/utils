<?php
declare(strict_types=1);

namespace ReinertTomas\Utils;

class Value
{
    public static function isBool(mixed $value): bool
    {
        if (gettype($value) === "boolean") {
            return true;
        }

        return false;
    }

    public static function isInt(mixed $value): bool
    {
        if (gettype($value) === "integer") {
            return true;
        }

        return false;
    }

    public static function isFloat(mixed $value): bool
    {
        if (gettype($value) === "double") {
            return true;
        }

        return false;
    }

    public static function isString(mixed $value): bool
    {
        if (gettype($value) === "string") {
            return true;
        }

        return false;
    }

    public static function isArray(mixed $value): bool
    {
        if (gettype($value) === "array") {
            return true;
        }

        return false;
    }

    public static function isObject(mixed $value): bool
    {
        if (gettype($value) === "object") {
            return true;
        }

        return false;
    }

    public static function isResource(mixed $value): bool
    {
        if (gettype($value) === "resource") {
            return true;
        }

        return false;
    }

    public static function isNull(mixed $value): bool
    {
        if (gettype($value) === "NULL") {
            return true;
        }

        return false;
    }

    public static function isUnknownType(mixed $value): bool
    {
        if (gettype($value) === "unknown type") {
            return true;
        }

        return false;
    }
}

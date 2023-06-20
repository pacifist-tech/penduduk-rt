<?php

namespace App\Helpers;

class Utils
{
    public static function replace($input, $replacement = '')
    {
        if (isset($input)) {
            return $input;
        }
        return $replacement;
    }
    public static function replaceValue(array $obj, string $key, $replacement = '')
    {
        if (!array_key_exists($key, $obj)) {
            return $replacement;
        }

        return self::replace($obj[$key], $replacement);
    }
}

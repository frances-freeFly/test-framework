<?php
/**
 * Description ${NAME}
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 18:10
 */

function env($key)
{
    $value = getenv($key);
    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'empty':
        case '(empty)':
            return '';
        case 'null':
        case '(null)':
            return null;
    }
    if (strlen($value) > 1 && Str::startsWith($value, '"') && Str::endsWith($value, '"')) {
        return substr($value, 1, -1);
    }

    return $value;
}
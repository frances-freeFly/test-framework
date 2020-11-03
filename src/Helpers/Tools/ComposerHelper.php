<?php
declare(strict_types=1);
/**
 * Description ComposerHelper
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/3 17:48
 */

namespace Frances\Helpers\Tools;


use Composer\Autoload\ClassLoader;

class ComposerHelper
{
    /**
     * @var ClassLoader
     */
    private static $composerLoader;

    public static function getClassLoader():ClassLoader{
        if (self::$composerLoader) {
            return self::$composerLoader;
        }
        $autoloadFunctions = spl_autoload_functions();
    }
}
<?php
/**
 * Description FrameworkHelpers
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 17:28
 */
namespace Frances\Helpers;


class FrameworkHelpers
{
    /**
     * Description：Check runtime extension conflict
     * Author: runfang.deng
     * Date:   2020/11/2 17:29
     */
    public static function checkExtension(): void{
        if(!version_compare(PHP_VERSION,'7.1')){
            throw new \RuntimeException('Run the server requires PHP version > 7.1');
        }
        if(!extension_loaded('swoole')){
            throw new \RuntimeException("Run the server, extension 'swoole 4.3+' is required!");
        }
        $conflicts_extension = [
            'blackfire',
            'xdebug',
            'uopz',
            'xhprof',
            'zend',
            'trace',
        ];
        foreach ($conflicts_extension as $extension) {
            if (extension_loaded($extension)) {
                throw new \RuntimeException("The extension of '{$extension}' must be closed, otherwise swoft will be affected!");
            }
        }
    }
}
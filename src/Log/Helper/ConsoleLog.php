<?php
/**
 * Description ConsoleLog
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/3 15:30
 */
namespace Frances\Log\Helper;

use Frances\Log\Handler\ConsoleEcho;
use Frances\Log\Logger\ConsoleLogger;
use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;

class ConsoleLog
{
    private  static $name='EPET_CLI';
    /**
     * @var
     */
    private static $ConsoleLogger;

    /**
     * Description：Init console logger
     * Author: runfang.deng
     * Date:   2020/11/3 10:46
     */
    public static function initLogger(): void{
        $system_name = env('SYSTEM_NAME',SYSTEM_NAME);
        $log_file=LOG_PATH .'/system_' . $system_name .'.log';

        $JsonFormatter = new JsonFormatter();

        $ConsoleEcho = new ConsoleEcho();
        $ConsoleEcho->setFormatter($JsonFormatter);

        $StreamHandler = new StreamHandler($log_file);
        $StreamHandler->setFormatter($JsonFormatter);

        $ConsoleLogger = new ConsoleLogger(self::$name,[$ConsoleEcho,$StreamHandler]);

        self::$ConsoleLogger = $ConsoleLogger;
    }
}
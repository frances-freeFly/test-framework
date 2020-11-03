<?php
/**
 * Description ConsoleLogger
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/3 15:32
 */
namespace Frances\Log\Logger;

use DateTimeZone;
use Monolog\Logger;

class ConsoleLogger extends Logger
{
    /**
     * ConsoleLogger constructor.
     * @param string $name
     * @param array $handlers
     * @param array $processors
     * @param DateTimeZone|null $timezone
     */
    public function __construct(string $name, array $handlers = [], array $processors = [], ?DateTimeZone $timezone = null)
    {
        parent::__construct($name,$handlers,$processors,$timezone);
    }
}
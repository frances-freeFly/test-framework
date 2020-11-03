<?php
/**
 * Description ConsoleEcho
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/3 15:36
 */

namespace Frances\Log\Handler;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Toolkit\Cli\Color;
use Toolkit\Cli\ColorTag;

class ConsoleEcho extends AbstractProcessingHandler
{
    const LEVELS_STYLES = [
        Logger::DEBUG     => 'cyan',
        Logger::INFO      => 'green',
        Logger::NOTICE    => 'green',
        Logger::WARNING   => 'yellow',
        Logger::ERROR     => 'red',
        Logger::CRITICAL  => 'green',
        Logger::ALERT     => 'green',
        Logger::EMERGENCY => 'green',
    ];

    /**
     * Description：Output message to command line
     * @param array $record
     * Author: runfang.deng
     * Date:   2020/11/3 15:52
     */
    protected function write(array $record): void
    {
        $datetime = $record['datetime'];
        $time = $datetime->format('Y/m/d-H:i:s');

        $level = $record['level'];
        $message = $record['message'];
        $level_name = $record['level_name'];
        $level_name = sprintf('[%s]',$level_name);

        // Add level tag
        $tag_name = self::LEVELS_STYLES[$level];
        $levelName = ColorTag::add($level_name, $tag_name);

        // Format message
        $message = sprintf('%s %s %s' . PHP_EOL, $time, $levelName, $message);

        echo Color::render($message);
    }
}
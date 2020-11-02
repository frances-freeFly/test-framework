<?php
/**
 * Description 日志工具类
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 17:52
 */


class Logger
{
    /**
     * Description：Get console logger config
     * Author: runfang.deng
     * Date:   2020/11/2 17:58
     */
    private function getConfig(){
        env('ss');
    }

    public function initLogger(): void{
        $config = $this->getConfig();
    }
}
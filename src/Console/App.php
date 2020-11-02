<?php
/**
 * Description App
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 12:13
 */


namespace Frances\Console;


class App
{
    public function start(){
        global $server_argv;
        print_r($server_argv);
    }
}
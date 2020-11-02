<?php
/**
 * Description 控制台启动类
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 12:10
 */

namespace Frances\Bootstrap;

use Frances\Console\App;

class Console
{
    public function boot(): void
    {
        (new App())->start(); //启动应用 初始化容器 注册核心服务
    }
}
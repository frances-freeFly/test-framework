<?php
/**
 * Description Application
 * Created by PhpStorm
 * Author: runfang.deng
 * Date:   2020/11/2 17:21
 */
namespace Frances\Base;

use Frances\Helpers\Tools\FrameworkHelpers;

class Application
{
    /**
     * Application constructor.
     */
    public function __construct()
    {
        FrameworkHelpers::checkExtension();

    }

}
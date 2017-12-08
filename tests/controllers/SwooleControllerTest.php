<?php
/**
 * Created by PhpStorm.
 * User: tsingsun
 * Date: 2017/2/22
 * Time: 下午6:01
 */

namespace yiiunit\extension\daemon\controllers;


use yiiunit\extension\daemon\TestCase;
use tsingsun\daemon\Controllers\SwooleController;


class SwooleControllerTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->mockApplication();
    }


    function testStart()
    {
        $siteName = 'testHttp';
        $command = 'start';
        $ins = \Yii::$app->runAction('swoole/start',[$siteName,$command]);
    }

    function testStop()
    {
        $siteName = 'testHttp';
        $command = 'stop';
        $ins = \Yii::$app->runAction('swoole/stop',[$siteName,$command]);
    }
}

<?php

error_reporting(E_ALL);
date_default_timezone_set("Asia/Shanghai");

//定义应用目录
define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));

//实力化应用
$application  = new Yaf_Application(APP_PATH . "/conf/application.ini");

//运行应用
$application->bootstrap()->run();

//退出应用
exit();
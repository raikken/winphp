<?php 
global $IS_DEBUG;
if (file_exists(ROOT_PATH.'/DEBUG'))
{
    $IS_DEBUG = true;
    ini_set('track_errors', true);
    ini_set("display_errors", "On");
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    Soso_Logger::setLevel(3);
}
else
{
    $IS_DEBUG=false;
    Soso_Logger::setLevel(1);
}
date_default_timezone_set('Asia/Shanghai');


DB::init("mysql:host=localhost;dbname=yangleduo;port:3306",'root','root123');
if(php_sapi_name()!='cli'){
    ini_set("session.save_handler", "memcache");  
    ini_set("session.save_path", "tcp://127.0.0.1:11211");
    session_start();
}
define("LOG_PATH", ROOT_PATH."/log/");
define("IS_DEBUG", $IS_DEBUG);
define("VERSION", 1);

//define("APPKEY", "98a27c42b5b46837ffa472e41eaf1ff2");
//define("APPID", "100448324");

define("APPID", "100454886");
define("APPKEY", "0f223ec7f81befb5d7e1956a2dfdd5de");

define("DOMAIN_NAME", "yakult.aoxpro.com");

<?php
/**
 * 上海旅烨网络科技有限公司&产品研发部.
 * User: HeiZi
 * Date: 17-6-12
 * Time: 下午1:59
 */
// 记录开始运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);
//主机协议
define('SITE_PROTOCOL', isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://');
//当前访问的主机名
define('SITE_URL', (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ''));
//来源
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');





class App_Start{

    public static function start(){
        self::vender_autoload();

        $m = !empty($_GET['m']) ? $_GET['m'] : 'Client';
        $c = !empty($_GET['c']) ? $_GET['c'] : 'Index';
        $a = !empty($_GET['a']) ? $_GET['a'] : 'Index';


        self::load_controller($m,$c);
        $controller =  'Application\\'.$m.'\\'.$c;
        $app = new $controller;
        call_user_func(array($app,$a."Actions"));

    }
    public static function vender_autoload(){
        require APP_PATH.'vendor/autoload.php';
    }

    static public function load_controller($m,$c)
    {
        require APPLICATION_PATH.$m.'/'.$c.'.php';
    }



}
//Application start
App_Start::start();


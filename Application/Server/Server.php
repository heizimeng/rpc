<?php
/**
 * 上海旅烨网络科技有限公司&产品研发部.
 * User: HeiZi
 * Date: 17-6-12
 * Time: 下午12:36
 */
namespace Application\Server;
use Hprose\Http\Server;



class Index{
    public function IndexActions()
    {
        $server = new Server();
        $server->addFunction('hello');
        $server->start();
    }

    
}




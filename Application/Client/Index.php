<?php
/**
 * 上海旅烨网络科技有限公司&产品研发部.
 * User: HeiZi
 * Date: 17-6-12
 * Time: 下午4:02
 */
namespace Application\Client;
use Hprose\Http\Client;

class Index{

    public function IndexActions()
    {
        $client = new Client('http://addon.com/index.php?m=Server&c=Index&a=Index',false);
        var_dump($client);
    }




}
<?php
namespace QiQiuYun\SDK\Tests;

use QiQiuYun\SDK\ImService;

class ImServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testListServers()
    {

        $service = new ImService([
            'accessKey' => '1',
            'secretKey' => '2',
        ]);

        $servers = $service->listServers();
    }

}

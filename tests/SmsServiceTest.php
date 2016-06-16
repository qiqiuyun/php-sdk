<?php
namespace QiQiuYun\SDK\Tests;

use QiQiuYun\SDK\SmsService;

class SmsServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testSendAuthCode()
    {

        $service = new SmsService([
            'accessKey' => '111',
            'secretKey' => '222',
        ]);

        $sended = $service->sendAuthCode('13757199220', '1111');

        var_dump($sended);
    }

}

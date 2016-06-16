<?php

namespace QiQiuYun\SDK;

use QiQiuYun\SDK\Exceptions\OtherException;
use QiQiuYun\SDK\Helper\ConfigHelper;
use QiQiuYun\SDK\Request\Request;

class SmsService
{
    const DEFAULT_ENDPOINT = 'leafapi1.edusoho.net/v1';

    protected $request;

    protected $config;

    public function __construct($config)
    {
        $this->config = ConfigHelper::filter($config, [
            'endpoint' => self::DEFAULT_ENDPOINT
        ]);

        $this->request = new Request($this->config);
    }

    public function sendAuthCode($mobile, $code, $category = '')
    {
        $result = $this->request->post("/sms/{$this->config['accessKey']}/sendVerify", [
            'mobile' => $mobile,
            'verify' => $code,
            'category' => $category,
        ]);

        if (isset($result['error'])) {
            throw new OtherException($result['error']);
        }

        return true;
    }

}


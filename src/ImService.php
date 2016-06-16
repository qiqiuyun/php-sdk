<?php

namespace QiQiuYun\SDK;

use QiQiuYun\SDK\Helper\ConfigHelper;

class ImService
{
    const DEFAULT_ENDPOINT = 'im.edusoho.net';

    public function __construct($config)
    {
        $this->config = ConfigHelper::filter($config, [
            'endpoint' => self::DEFAULT_ENDPOINT
        ]);

    }

    public function listServers()
    {
        
    }
}


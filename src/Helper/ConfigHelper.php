<?php

namespace QiQiuYun\SDK\Helper;

use QiQiuYun\SDK\Exceptions\ClientException;

class ConfigHelper
{

    public static function filter($config, array $defaults = [])
    {
        $config = array_merge(['debug' => false], $defaults, $config);

        if (empty($config['accessKey']) || empty($config['secretKey'])) {
            throw new ClientException("AccessKey, or secretKey is not gived.");
        }

        return $config;
    }
}

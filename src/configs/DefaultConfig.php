<?php

namespace mmaurice\api\infoflot\configs;

abstract class DefaultConfig extends \mmaurice\apigate\configs\Config
{
    protected $options = [
        # URL
        'url' => '',
        # API-ключ
        'apiKey' => '',
    ];
}

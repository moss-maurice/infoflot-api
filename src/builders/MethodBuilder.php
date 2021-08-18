<?php

namespace mmaurice\api\infoflot\builders;

use \mmaurice\api\infoflot\Client;

abstract class MethodBuilder extends \mmaurice\apigate\builders\MethodBuilder
{
    protected function headers()
    {
        return array_merge(parent::headers(), [
            'x-api-key' => Client::$config->getApiKey(),
            'Content-Type' => 'application/json; charset=utf-8',
        ]);
    }
}

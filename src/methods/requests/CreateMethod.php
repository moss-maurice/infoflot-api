<?php

namespace mmaurice\api\infoflot\methods\requests;

use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\shemas\RequestServiceShema;
use \mmaurice\api\infoflot\shemas\RequestsShema;
use \mmaurice\api\infoflot\shemas\RequestPassengerShema;
use \mmaurice\apigate\types\ArrayType;

final class CreateMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'services' => [[RequestServiceShema::class, ArrayType::class], false, []],
        'passengers' => [[RequestPassengerShema::class, ArrayType::class], false, []],
    ];

    protected static $params = [
        'limit',
        'page',
    ];
    protected static $shemas = [
        200 => RequestsShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::POST;
    }

    protected function url($url = '')
    {
        return parent::url('requests');
    }
}

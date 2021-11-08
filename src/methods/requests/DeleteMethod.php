<?php

namespace mmaurice\api\infoflot\methods\requests;

use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\shemas\RequestServiceShema;
use \mmaurice\api\infoflot\shemas\RequestsShema;
use \mmaurice\api\infoflot\shemas\RequestPassengerShema;
use \mmaurice\apigate\types\ArrayType;

final class DeleteMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => RequestsShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::DELETE;
    }

    protected function url($url = '')
    {
        return parent::url('requests');
    }
}

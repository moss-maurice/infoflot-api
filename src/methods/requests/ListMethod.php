<?php

namespace mmaurice\api\infoflot\methods\requests;

use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\shemas\RequestsShema;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'limit' => ['integer', false, 100],
        'page' => ['integer', false, 1],
    ];

    protected static $params = [
        'limit',
        'page',
    ];

    protected static $shemas = [
        200 => RequestsShema::class,
        400 => ErrorShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('requests');
    }
}

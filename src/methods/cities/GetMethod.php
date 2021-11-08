<?php

namespace mmaurice\api\infoflot\methods\cities;

use \mmaurice\api\infoflot\shemas\CityShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class GetMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => CityShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('cities/<id>');
    }
}

<?php

namespace mmaurice\api\infoflot\methods\cruises;

use \mmaurice\api\infoflot\shemas\CruiseShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class GetMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => CruiseShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('cruises/<id>');
    }
}

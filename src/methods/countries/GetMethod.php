<?php

namespace mmaurice\api\infoflot\methods\countries;

use \mmaurice\api\infoflot\shemas\CountryShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class GetMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => CountryShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('countries/<id>');
    }
}

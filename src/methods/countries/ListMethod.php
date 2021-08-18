<?php

namespace mmaurice\api\infoflot\methods\countries;

use \mmaurice\api\infoflot\shemas\CountriesShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $shemas = [
        200 => CountriesShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('countries');
    }
}

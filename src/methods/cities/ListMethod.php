<?php

namespace mmaurice\api\infoflot\methods\cities;

use \mmaurice\api\infoflot\shemas\CitiesShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $shemas = [
        200 => CitiesShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('cities');
    }
}

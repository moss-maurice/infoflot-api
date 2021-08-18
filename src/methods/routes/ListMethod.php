<?php

namespace mmaurice\api\infoflot\methods\routes;

use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\shemas\PopularRoutesShema;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $shemas = [
        200 => PopularRoutesShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('popular-routes');
    }
}

<?php

namespace mmaurice\api\infoflot\methods\regions;

use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\shemas\RegionsShema;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $shemas = [
        200 => RegionsShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('regions');
    }
}

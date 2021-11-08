<?php

namespace mmaurice\api\infoflot\methods\cruises\cabins;

use \mmaurice\api\infoflot\shemas\CruiseCabinsShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class GetMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => CruiseCabinsShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('cruises/<id>/cabins');
    }
}

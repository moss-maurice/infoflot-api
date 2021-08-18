<?php

namespace mmaurice\api\infoflot\methods\discounts;

use \mmaurice\api\infoflot\shemas\DiscountShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class GetMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => DiscountShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('discounts/<id>');
    }
}

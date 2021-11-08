<?php

namespace mmaurice\api\infoflot\methods\discounts;

use \mmaurice\api\infoflot\shemas\DiscountsShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'ship' => ['integer'],
        'cruise' => ['integer'],
    ];

    protected static $params = [
        'ship',
        'cruise',
    ];

    protected static $shemas = [
        200 => DiscountsShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('discounts');
    }
}

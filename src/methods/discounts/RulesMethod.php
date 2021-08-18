<?php

namespace mmaurice\api\infoflot\methods\discounts;

use \mmaurice\api\infoflot\shemas\DiscountRulesShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;

final class RulesMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $shemas = [
        200 => DiscountRulesShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('discounts-rules');
    }
}

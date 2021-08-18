<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CruiseDiscountTypeShema;
use \mmaurice\api\infoflot\shemas\CruiseDiscountValueShema;
use \mmaurice\apigate\types\ArrayType;

class CruiseDiscountShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'type' => [CruiseDiscountTypeShema::class],
        'values' => [[CruiseDiscountValueShema::class, ArrayType::class]],
    ];
}

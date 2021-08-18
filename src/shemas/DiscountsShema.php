<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\DiscountShema;
use \mmaurice\apigate\types\ArrayType;

class DiscountsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filter' => ['object'],
        'count' => ['integer'],
        'data' => [[DiscountShema::class, ArrayType::class]],
    ];
}

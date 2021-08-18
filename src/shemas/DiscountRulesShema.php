<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\DiscountRuleShema;
use \mmaurice\apigate\types\ArrayType;

class DiscountRulesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[DiscountRuleShema::class, ArrayType::class]],
    ];
}

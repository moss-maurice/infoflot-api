<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\apigate\types\ArrayType;

class DiscountRuleShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'types' => [['integer', ArrayType::class]],
        'disabled' => [['integer', ArrayType::class]],
    ];
}

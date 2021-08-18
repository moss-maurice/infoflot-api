<?php

namespace mmaurice\api\infoflot\shemas;

class CruiseDiscountValueShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'timeStart' => [['string', DateIso8601Type::class]],
        'timeEnd' => [['string', DateIso8601Type::class]],
        'amount' => ['integer'],
    ];
}

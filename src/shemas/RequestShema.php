<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\apigate\types\DateIso8601Type;

class RequestShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['integer'],
        'status' => ['integer'],
        'amount' => ['double'],
        'currency_id' => ['integer'],
        'created' => [['string', DateIso8601Type::class]],
        'confirmed' => [['string', DateIso8601Type::class]],
        'expired' => [['string', DateIso8601Type::class]],
        'commission' => ['double'],
    ];
}

<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\apigate\types\DateIso8601Type;

class CoordinatesSheme extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'latitude' => ['double'],
        'longitude' => ['double'],
        'timeUpdated' => [['string', DateIso8601Type::class]],
    ];
}

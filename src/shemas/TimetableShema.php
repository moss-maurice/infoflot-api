<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CityShema;
use \mmaurice\api\infoflot\shemas\ExcursionShema;
use \mmaurice\apigate\types\ArrayType;
use \mmaurice\apigate\types\DateIso8601Type;

class TimetableShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'dateArrival' => [['string', DateIso8601Type::class]],
        'dateDeparture' => [['string', DateIso8601Type::class]],
        'place' => ['string'],
        'description' => ['string'],
        'city' => [CityShema::class],
        'port' => ['integer'],
        'excursions' => [[ExcursionShema::class, ArrayType::class]],
        'hideDate' => ['boolean'],
        'hideTime' => ['boolean'],
    ];
}

<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CityShema;
use \mmaurice\apigate\types\ArrayType;

class CitiesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[CityShema::class, ArrayType::class]],
    ];
}

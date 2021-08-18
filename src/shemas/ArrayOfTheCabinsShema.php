<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\types\CabinPlaceStatusEnumType;

class ArrayOfTheCabinsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'place_type' => ['integer'],
        'place_index' => ['integer'],
        'price' => ['integer'],
        'status' => [['integer', CabinPlaceStatusEnumType::class]],
    ];
}

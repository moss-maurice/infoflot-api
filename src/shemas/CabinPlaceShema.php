<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\types\CabinPlacePositionEnumType;
use \mmaurice\api\infoflot\types\CabinPlaceStatusEnumType;
use \mmaurice\api\infoflot\types\CabinPlaceTypeEnumType;

class CabinPlaceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'name' => ['integer'],
        'type' => [['integer', CabinPlaceTypeEnumType::class]],
        'position' => [['integer', CabinPlacePositionEnumType::class]],
        'status' => [['integer', CabinPlaceStatusEnumType::class]],
    ];
}

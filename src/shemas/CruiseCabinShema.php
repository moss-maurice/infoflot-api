<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CabinPlaceShema;
use \mmaurice\api\infoflot\types\CruiseCabinGenderEnumType;
use \mmaurice\apigate\types\ArrayType;

class CruiseCabinShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'name' => ['integer'],
        'type_id' => ['string'],
        'separate' => ['boolean'],
        'gender' => [['integer', CruiseCabinGenderEnumType::class]],
        'cabins' => [[CabinPlaceShema::class, ArrayType::class]],
    ];
}

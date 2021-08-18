<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CruiseCabinShema;
use \mmaurice\api\infoflot\shemas\CruiseCabinExternalPriceShema;
use \mmaurice\api\infoflot\shemas\CruiseCabinPriceShema;
use \mmaurice\api\infoflot\shemas\CruiseShema;
use \mmaurice\apigate\types\ArrayType;

class CruiseCabinsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'freePlacesCount' => ['integer'],
        'cruise' => [[CruiseShema::class, ArrayType::class]],
        'prices' => [[CruiseCabinPriceShema::class, ArrayType::class]],
        'cabins' => [[CruiseCabinShema::class, ArrayType::class]],
        'external_prices' => [[CruiseCabinExternalPriceShema::class, ArrayType::class]],
    ];
}

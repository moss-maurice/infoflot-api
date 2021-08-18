<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CabinPlacePriceShema;

class CruiseCabinPriceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'type_name' => ['string'],
        'type_description' => ['string'],
        'single' => ['boolean'],
        'main_bottom' => [CabinPlacePriceShema::class],
        'main_top' => [CabinPlacePriceShema::class],
        'additional_bottom' => [CabinPlacePriceShema::class],
        'additional_top' => [CabinPlacePriceShema::class],
    ];
}

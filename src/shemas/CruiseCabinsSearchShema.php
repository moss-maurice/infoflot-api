<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\ArrayOfTheCabinsShema;
use \mmaurice\api\infoflot\shemas\DeckShortShema;
use \mmaurice\api\infoflot\shemas\ShipIdCabinTypeClassShema;
use \mmaurice\apigate\types\ArrayType;

class CruiseCabinsSearchShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filter' => ['object'],
        'places' => [[ArrayOfTheCabinsShema::class, ArrayType::class]],
        'total' => ['integer'],
        'cabin_id' => ['integer'],
        'cabin_name' => ['string'],
        'category' => [[ShipIdCabinTypeClassShema::class, ArrayType::class]],
        'deck' => [[DeckShortShema::class, ArrayType::class]],
    ];
}

<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\DeckShema;
use \mmaurice\api\infoflot\shemas\CabinShema;
use \mmaurice\apigate\types\ArrayType;

class CruiseShipShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'decks' => [[DeckShema::class, ArrayType::class]],
        'cabins' => [[CabinShema::class, ArrayType::class]],
    ];
}

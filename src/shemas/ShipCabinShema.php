<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\DeckShema;
use \mmaurice\api\infoflot\shemas\ShipCabinPlacesShema;
use \mmaurice\api\infoflot\shemas\ShipPhotosShema;

class ShipCabinShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'shipId' => ['integer'],
        'deckId' => ['integer'],
        'typeId' => ['integer'],
        'typeName' => ['string'],
        'deck' => [DeckShema::class],
        'photos' => [ShipPhotosShema::class],
        'places' => [ShipCabinPlacesShema::class],
    ];
}

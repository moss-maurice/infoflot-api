<?php

namespace mmaurice\api\infoflot\shemas;

class ShipCabinPlacesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'main' => ['integer'],
        'additional' => ['integer'],
    ];
}

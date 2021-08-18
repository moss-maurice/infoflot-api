<?php

namespace mmaurice\api\infoflot\shemas;

class ShipIdCabinTypeClassSheme extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

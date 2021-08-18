<?php

namespace mmaurice\api\infoflot\shemas;

class ShipIdCabinTypeFriendlyNameSheme extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'ru' => ['string'],
        'en' => ['string'],
    ];
}

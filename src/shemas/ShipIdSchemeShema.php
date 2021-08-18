<?php

namespace mmaurice\api\infoflot\shemas;

class ShipIdSchemeShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'dateStart' => ['integer'],
        'filename' => ['string'],
    ];
}

<?php

namespace mmaurice\api\infoflot\shemas;

class PortShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'address' => ['string'],
        'city' => ['string'],
    ];
}

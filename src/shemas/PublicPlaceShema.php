<?php

namespace mmaurice\api\infoflot\shemas;

class PublicPlaceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'description' => ['string'],
        'photo' => ['string'],
    ];
}

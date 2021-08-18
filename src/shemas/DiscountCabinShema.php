<?php

namespace mmaurice\api\infoflot\shemas;

class DiscountCabinShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'shipId' => ['integer'],
        'deckId' => ['integer'],
        'typeId' => ['integer'],
        'typeName' => ['string'],
        'typeFriendlyName' => ['string'],
        'cabinDesciption' => ['string'],
    ];
}

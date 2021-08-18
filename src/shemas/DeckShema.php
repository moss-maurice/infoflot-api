<?php

namespace mmaurice\api\infoflot\shemas;

class DeckShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'position' => ['integer'],
        'shipId' => ['integer'],
    ];
}

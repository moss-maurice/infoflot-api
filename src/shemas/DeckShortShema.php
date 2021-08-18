<?php

namespace mmaurice\api\infoflot\shemas;

class DeckShortShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

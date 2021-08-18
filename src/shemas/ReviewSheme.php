<?php

namespace mmaurice\api\infoflot\shemas;

class ReviewSheme extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'author' => ['string'],
        'text' => ['string'],
        'rate' => ['integer'],
        'date' => ['string'],
    ];
}

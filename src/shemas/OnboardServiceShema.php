<?php

namespace mmaurice\api\infoflot\shemas;

class OnboardServiceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'description' => ['string'],
    ];
}

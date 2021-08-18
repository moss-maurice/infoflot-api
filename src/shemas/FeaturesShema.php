<?php

namespace mmaurice\api\infoflot\shemas;

class FeaturesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'name' => ['string'],
        'description' => ['string'],
    ];
}

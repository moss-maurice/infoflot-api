<?php

namespace mmaurice\api\infoflot\shemas;

class PopularRouteShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

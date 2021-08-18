<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\apigate\types\DateIso8601Type;

class DiscountCruiseShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'beautifulName' => ['string'],
        'cruisePopular' => ['boolean'],
        'dateStart' => [['string', DateIso8601Type::class]],
        'dateEnd' => [['string', DateIso8601Type::class]],
        'dateStartTimestamp' => ['integer'],
        'days' => ['integer'],
        'nights' => ['integer'],
        'route' => ['string'],
        'routeShort' => ['string'],
        'portStart' => ['integer'],
        'portEnd' => ['integer'],
        'region' => ['string'],
        'river' => ['string'],
        'shipId' => ['integer'],
        'shipType' => ['integer'],
        'description' => ['string'],
        'include' => ['string'],
        'additional' => ['string'],
        'important' => ['string'],
        'min_price' => ['integer'],
        'currency' => ['integer'],
        'rate' => ['integer'],
        'freeCabins' => ['integer'],
        'oldPrice' => ['integer'],
        'showMap' => ['boolean'],
        'weekend' => ['boolean'],
    ];
}

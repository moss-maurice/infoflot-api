<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\ExcursionPhotosShema;
use \mmaurice\apigate\types\ArrayType;

class ExcursionShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'description' => ['string'],
        'timeStart' => ['string'],
        'timeEnd' => ['string'],
        'length' => ['integer'],
        'minimumPeople' => ['integer'],
        'priceAdult' => ['integer'],
        'priceAdultCurrency' => ['integer'],
        'priceChild' => ['integer'],
        'priceChildCurrency' => ['integer'],
        'included' => ['boolean'],
        'photos' => [['string', ArrayType::class]],
        'images' => [[ExcursionPhotosShema::class, ArrayType::class]],
    ];
}

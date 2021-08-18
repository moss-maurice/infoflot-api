<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CruiseDiscountShema;
use \mmaurice\api\infoflot\shemas\CruisePhotosShema;
use \mmaurice\api\infoflot\shemas\CruisePricesShema;
use \mmaurice\api\infoflot\shemas\CruiseShipShema;
use \mmaurice\api\infoflot\shemas\CruiseTypeShema;
use \mmaurice\api\infoflot\shemas\PopularRouteShema;
use \mmaurice\api\infoflot\shemas\RegionShema;
use \mmaurice\api\infoflot\shemas\RiverShema;
use \mmaurice\api\infoflot\shemas\TimetableShema;
use \mmaurice\apigate\types\ArrayType;
use \mmaurice\apigate\types\DateIso8601Type;

class CruiseShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'beautifulName' => ['string'],
        'cruisePopular' => ['boolean'],
        'type' => [CruiseTypeShema::class],
        'dateStart' => [['string', DateIso8601Type::class]],
        'dateEnd' => [['string', DateIso8601Type::class]],
        'days' => ['integer'],
        'nights' => ['integer'],
        'route' => ['string'],
        'routeShort' => ['string'],
        'routeAboveText' => ['string'],
        'routeBottomText' => ['string'],
        'ship' => [CruiseShipShema::class],
        'timetable' => [[TimetableShema::class, ArrayType::class]],
        'river' => ['string'],
        'rivers' => [[RiverShema::class, ArrayType::class]],
        'region' => ['string'],
        'regions' => [[RegionShema::class, ArrayType::class]],
        'popularRoutes' => [[PopularRouteShema::class, ArrayType::class]],
        'include' => ['string'],
        'additional' => ['string'],
        'important' => ['string'],
        'description' => ['string'],
        'photos' => [[CruisePhotosShema::class, ArrayType::class]],
        'map' => ['string'],
        'timetableDoc' => ['string'],
        'timetablePdf' => ['string'],
        'discounts' => [[CruiseDiscountShema::class, ArrayType::class]],
        'maxDiscount' => ['integer'],
        'discountsText' => ['string'],
        'min_price' => ['integer'],
        'max_price' => ['integer'],
        'currency' => ['integer'],
        'rate' => ['double'],
        'freeCabins' => ['integer'],
        'dateStartTimestamp' => ['integer'],
        'portStart' => ['integer'],
        'portEnd' => ['integer'],
        'weekend' => ['integer'],
        'notesExcursions' => ['string'],
        'startCity' => ['integer'],
        'startCityName' => ['string'],
        'startCityNameEn' => ['string'],
        'startCityCountry' => ['integer'],
        'prices' => [CruisePricesShema::class],
        'min_price_rur' => ['integer'],
        'russian_squad' => ['boolean'],
        'russian_squad_title' => [['string', ArrayType::class]],
    ];
}

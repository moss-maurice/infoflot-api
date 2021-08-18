<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\DiscountAgeShema;
use \mmaurice\api\infoflot\shemas\DiscountCabinShema;
use \mmaurice\api\infoflot\shemas\DiscountCruiseShema;
use \mmaurice\api\infoflot\shemas\DiscountShipShema;
use \mmaurice\api\infoflot\shemas\DiscountTypeShema;
use \mmaurice\api\infoflot\types\DiscountGenderEnumType;
use \mmaurice\apigate\types\ArrayType;
use \mmaurice\apigate\types\DateIso8601Type;

class DiscountShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'type' => [DiscountTypeShema::class],
        'name' => ['string'],
        'amount' => ['integer'],
        'gender' => [['integer', DiscountGenderEnumType::class]],
        'age' => [DiscountAgeShema::class],
        'validThrough' => [['string', DateIso8601Type::class]],
        'bookDateStart' => [['string', DateIso8601Type::class]],
        'bookDateEnd' => [['string', DateIso8601Type::class]],
        'cruiseDateStart' => [['string', DateIso8601Type::class]],
        'cruiseDateEnd' => [['string', DateIso8601Type::class]],
        'cabins' => [[DiscountCabinShema::class, ArrayType::class]],
        'cruises' => [[DiscountCruiseShema::class, ArrayType::class]],
        'ships' => [[DiscountShipShema::class, ArrayType::class]],
    ];
}

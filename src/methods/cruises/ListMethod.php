<?php

namespace mmaurice\api\infoflot\methods\cruises;

use \mmaurice\api\infoflot\shemas\CruisesShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\types\DateType;
use \mmaurice\api\infoflot\types\SortEnumType;
use \mmaurice\api\infoflot\types\TypeEnumType;
use \mmaurice\apigate\types\ArrayType;

final class ListMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'limit' => ['integer', false, 100],
        'page' => ['integer', false, 1],
        'sort' => [['string', SortEnumType::class], false, SortEnumType::SORT_DATE],
        'ship' => [['integer', ArrayType::class]],
        'dateStartFrom' => [['string', DateType::class]],
        'dateStartTo' => [['string', DateType::class]],
        'dateEndFrom' => [['string', DateType::class]],
        'dateEndTo' => [['string', DateType::class]],
        'type' => [['string', TypeEnumType::class], false, TypeEnumType::TYPE_SEA],
        'lengthMin' => ['integer'],
        'lengthMax' => ['integer'],
        'nightsMin' => ['integer'],
        'nightsMax' => ['integer'],
        'days' => [['integer', ArrayType::class]],
        'nights' => ['integer'],
        'startCity' => ['integer'],
        'startCountry' => ['integer'],
        'portStart' => ['integer'],
        'portEnd' => ['integer'],
        'currency' => ['integer'],
        'minPriceFrom' => ['integer'],
        'minPriceTo' => ['integer'],
        'maxPriceFrom' => ['integer'],
        'maxPriceTo' => ['integer'],
        'regions' => ['integer'],
    ];

    protected static $params = [
        'limit',
        'page',
        'sort',
        'ship',
        'dateStartFrom',
        'dateStartTo',
        'dateEndFrom',
        'dateEndTo',
        'type',
        'lengthMin',
        'lengthMax',
        'nightsMin',
        'nightsMax',
        'days',
        'nights',
        'startCity',
        'startCountry',
        'portStart',
        'portEnd',
        'currency',
        'minPriceFrom',
        'minPriceTo',
        'maxPriceFrom',
        'maxPriceTo',
        'regions',
    ];

    protected static $shemas = [
        200 => CruisesShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('cruises');
    }
}

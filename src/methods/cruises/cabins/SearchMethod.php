<?php

namespace mmaurice\api\infoflot\methods\cruises\cabins;

use \mmaurice\api\infoflot\shemas\CruiseCabinsSearchShema;
use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\apigate\types\ArrayType;

final class SearchMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
        'adult_count' => ['integer'],
        'retiree_count' => ['integer'],
        'child_place_count' => ['integer'],
        'child_without_place_count' => ['integer'],
        'children_age' => [['string', ArrayType::class]],
        'children_age_without_place' => [['string', ArrayType::class]],
    ];

    protected static $params = [
        'adult_count',
        'retiree_count',
        'child_place_count',
        'child_without_place_count',
        'children_age',
        'children_age_without_place',
    ];

    protected static $shemas = [
        200 => CruiseCabinsSearchShema::class,
        403 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('cruises/<id>/cabins/search');
    }
}

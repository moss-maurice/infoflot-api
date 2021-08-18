<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\PopularRouteShema;
use \mmaurice\apigate\types\ArrayType;

class PopularRoutesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[PopularRouteShema::class, ArrayType::class]],
    ];
}

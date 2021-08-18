<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\RegionShema;
use \mmaurice\apigate\types\ArrayType;

class RegionsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[RegionShema::class, ArrayType::class]],
    ];
}

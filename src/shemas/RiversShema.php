<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\RiverShema;
use \mmaurice\apigate\types\ArrayType;

class RiversShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[RiverShema::class, ArrayType::class]],
    ];
}

<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\PublicPlaceShema;
use \mmaurice\apigate\types\ArrayType;

class PublicPlacesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[PublicPlaceShema::class, ArrayType::class]],
    ];
}

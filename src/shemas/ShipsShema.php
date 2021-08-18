<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\PaginationShema;
use \mmaurice\api\infoflot\shemas\ShipShema;
use \mmaurice\apigate\types\ArrayType;

class ShipsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filter' => ['object'],
        'pagination' => [PaginationShema::class],
        'count' => ['integer'],
        'data' => [[ShipShema::class, ArrayType::class]],
    ];
}

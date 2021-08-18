<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CruiseShema;
use \mmaurice\api\infoflot\shemas\ExcursionShema;
use \mmaurice\api\infoflot\shemas\PaginationShema;
use \mmaurice\apigate\types\ArrayType;

class CruisesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filter' => ['object'],
        'pagination' => [PaginationShema::class],
        'data' => [[CruiseShema::class, ArrayType::class]],
        'excursions' => [[ExcursionShema::class, ArrayType::class]],
    ];
}

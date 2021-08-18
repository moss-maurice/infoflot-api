<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\RequestShema;
use \mmaurice\apigate\types\ArrayType;

class RequestsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filter' => ['object'],
        'count_items' => ['integer'],
        'total_items' => ['integer'],
        'limit' => ['integer'],
        'page' => ['integer'],
        'data' => [[RequestShema::class, ArrayType::class]],
    ];
}

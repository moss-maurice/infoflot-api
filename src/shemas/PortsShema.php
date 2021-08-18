<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\PortShema;
use \mmaurice\apigate\types\ArrayType;

class PortsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[PortShema::class, ArrayType::class]],
    ];
}

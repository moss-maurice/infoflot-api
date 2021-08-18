<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\OnboardServiceShema;
use \mmaurice\apigate\types\ArrayType;

class OnboardServicesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[OnboardServiceShema::class, ArrayType::class]],
    ];
}

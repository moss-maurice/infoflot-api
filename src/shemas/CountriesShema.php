<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CountryShema;
use \mmaurice\apigate\types\ArrayType;

class CountriesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'count' => ['integer'],
        'data' => [[CountryShema::class, ArrayType::class]],
    ];
}

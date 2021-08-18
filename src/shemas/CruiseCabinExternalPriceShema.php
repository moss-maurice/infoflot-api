<?php

namespace mmaurice\api\infoflot\shemas;

class CruiseCabinExternalPriceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'name' => ['integer'],
        'price' => ['integer'],
    ];
}

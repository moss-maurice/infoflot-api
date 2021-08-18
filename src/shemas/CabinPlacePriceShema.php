<?php

namespace mmaurice\api\infoflot\shemas;

class CabinPlacePriceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'adult' => ['integer'],
        'child' => ['integer'],
        'mixed' => ['integer'],
    ];
}

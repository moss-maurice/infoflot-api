<?php

namespace mmaurice\api\infoflot\shemas;

class DiscountAgeShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'min' => ['integer'],
        'max' => ['integer'],
    ];
}

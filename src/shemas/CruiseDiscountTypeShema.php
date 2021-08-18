<?php

namespace mmaurice\api\infoflot\shemas;

class CruiseDiscountTypeShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

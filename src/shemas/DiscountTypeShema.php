<?php

namespace mmaurice\api\infoflot\shemas;

class DiscountTypeShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

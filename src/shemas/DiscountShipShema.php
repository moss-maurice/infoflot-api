<?php

namespace mmaurice\api\infoflot\shemas;

class DiscountShipShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

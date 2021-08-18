<?php

namespace mmaurice\api\infoflot\shemas;

class CruiseTypeShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
    ];
}

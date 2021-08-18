<?php

namespace mmaurice\api\infoflot\shemas;

class ErrorShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'status' => ['integer'],
        'message' => ['string'],
    ];
}

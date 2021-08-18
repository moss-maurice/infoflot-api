<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\types\RequestPassengerTypeEnumType;

class RequestPassengerShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'passenger_type' => [['integer', RequestPassengerTypeEnumType::class], false, RequestServiceTypeEnumType::TYPE_ADULT],
        'cabin_id' => ['integer'],
        'cabin_name' => ['string'],
        'first_name' => ['string'],
        'last_name' => ['string'],
        'middle_name' => ['string'],
        'passport_series' => ['string'],
        'passport_number' => ['string'],
    ];
}

<?php

namespace mmaurice\api\infoflot\types;

class CabinPlaceStatusEnumType extends \mmaurice\apigate\types\EnumType
{
    const STATUS_AVAILABLE = 0;
    const STATUS_BOOKED = 1;
    const STATUS_SELLED = 2;
    const STATUS_FOR_REQUEST = 4;

    protected $options = [
        'enum' => [
            self::STATUS_AVAILABLE,
            self::STATUS_BOOKED,
            self::STATUS_SELLED,
            self::STATUS_FOR_REQUEST,
        ],
    ];
}

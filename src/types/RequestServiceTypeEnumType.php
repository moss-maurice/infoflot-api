<?php

namespace mmaurice\api\infoflot\types;

class RequestServiceTypeEnumType extends \mmaurice\apigate\types\EnumType
{
    const TYPE_CRUISE = 0;
    const TYPE_EXCURSION = 1;
    const TYPE_VISA = 2;
    const TYPE_TRANSFER = 3;
    const TYPE_FLYGHT_TICKET = 4;
    const TYPE_TRAIN_TICKET = 5;
    const TYPE_INSURANCE = 6;
    const TYPE_HOTEL = 7;
    const TYPE_FEE = 8;
    const TYPE_RENT = 9;
    const TYPE_CERTIFICATE = 10;
    const TYPE_OTHER = 20;

    protected $options = [
        'enum' => [
            self::TYPE_CRUISE,
            self::TYPE_EXCURSION,
            self::TYPE_VISA,
            self::TYPE_TRANSFER,
            self::TYPE_FLYGHT_TICKET,
            self::TYPE_TRAIN_TICKET,
            self::TYPE_INSURANCE,
            self::TYPE_HOTEL,
            self::TYPE_FEE,
            self::TYPE_RENT,
            self::TYPE_CERTIFICATE,
            self::TYPE_OTHER,
        ],
    ];
}

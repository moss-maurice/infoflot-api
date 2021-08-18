<?php

namespace mmaurice\api\infoflot\types;

class RequestPassengerTypeEnumType extends \mmaurice\apigate\types\EnumType
{
    const TYPE_ADULT = 0;
    const TYPE_ADULT_CHILD = 1;
    const TYPE_CHILD = 2;
    const TYPE_FREE = 3;
    const TYPE_SINGLE = 4;

    protected $options = [
        'enum' => [
            self::TYPE_ADULT,
            self::TYPE_ADULT_CHILD,
            self::TYPE_CHILD,
            self::TYPE_FREE,
            self::TYPE_SINGLE,
        ],
    ];
}

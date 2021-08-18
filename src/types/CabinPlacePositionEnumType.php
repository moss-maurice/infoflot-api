<?php

namespace mmaurice\api\infoflot\types;

class CabinPlacePositionEnumType extends \mmaurice\apigate\types\EnumType
{
    const POSITION_DOWN = 0;
    const POSITION_UP = 1;

    protected $options = [
        'enum' => [
            self::POSITION_DOWN,
            self::POSITION_UP,
        ],
    ];
}

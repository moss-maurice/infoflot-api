<?php

namespace mmaurice\api\infoflot\types;

class CabinPlaceTypeEnumType extends \mmaurice\apigate\types\EnumType
{
    const TYPE_MAIN = 0;
    const TYPE_ADDITIONAL = 1;

    protected $options = [
        'enum' => [
            self::TYPE_MAIN,
            self::TYPE_ADDITIONAL,
        ],
    ];
}

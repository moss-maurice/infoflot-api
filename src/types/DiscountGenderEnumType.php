<?php

namespace mmaurice\api\infoflot\types;

class DiscountGenderEnumType extends \mmaurice\apigate\types\EnumType
{
    const GENDER_UNSET = 0;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 1;

    protected $options = [
        'enum' => [
            self::GENDER_UNSET,
            self::GENDER_MALE,
            self::GENDER_FEMALE,
        ],
    ];
}

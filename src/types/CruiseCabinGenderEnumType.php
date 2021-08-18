<?php

namespace mmaurice\api\infoflot\types;

class CruiseCabinGenderEnumType extends \mmaurice\apigate\types\EnumType
{
    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;

    protected $options = [
        'enum' => [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
        ],
    ];
}

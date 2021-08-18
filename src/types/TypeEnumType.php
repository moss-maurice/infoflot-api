<?php

namespace mmaurice\api\infoflot\types;

class TypeEnumType extends \mmaurice\apigate\types\EnumType
{
    const TYPE_SEA = 'sea';
    const TYPE_RIVER = 'river';

    protected $options = [
        'enum' => [
            self::TYPE_SEA,
            self::TYPE_RIVER,
        ],
    ];
}

<?php

namespace mmaurice\api\infoflot\types;

class SortEnumType extends \mmaurice\apigate\types\EnumType
{
    const SORT_DATE = 'date';
    const SORT_DATE_ASC = 'date-asc';
    const SORT_DATE_DESC = 'date-desc';
    const SORT_PRICE = 'price';
    const SORT_PRICE_ASC = 'price-asc';
    const SORT_PRICE_DESC = 'price-desc';
    const SORT_LENGTH = 'length';
    const SORT_LENGTH_ASC = 'length-asc';
    const SORT_LENGTH_DESC = 'length-desc';

    protected $options = [
        'enum' => [
            self::SORT_DATE,
            self::SORT_DATE_ASC,
            self::SORT_DATE_DESC,
            self::SORT_PRICE,
            self::SORT_PRICE_ASC,
            self::SORT_PRICE_DESC,
            self::SORT_LENGTH,
            self::SORT_LENGTH_ASC,
            self::SORT_LENGTH_DESC,
        ],
    ];
}

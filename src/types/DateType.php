<?php

namespace mmaurice\api\infoflot\types;

class DateType extends \mmaurice\apigate\types\DateIso8601Type
{
    protected $options = [
        'mask' => '/^([\d]{4})\-([\d]+)\-([\d]+)$/i',
    ];
}

<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\types\RequestServiceTypeEnumType;

class RequestServiceShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'service_type' => [['integer', RequestServiceTypeEnumType::class], false, RequestServiceTypeEnumType::TYPE_CERTIFICATE],
        'cruise_id' => ['integer'],
    ];
}

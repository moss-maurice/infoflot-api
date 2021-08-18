<?php

namespace mmaurice\api\infoflot\shemas;

class ShipFileShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'name' => ['string'],
        'path' => ['string'],
        'type' => ['string'],
        'size' => ['string'],
    ];
}

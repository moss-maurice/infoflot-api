<?php

namespace mmaurice\api\infoflot\shemas;

class CityPhotoShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'name' => ['string'],
        'path' => ['string'],
        'type' => ['string'],
        'size' => ['string'],
    ];
}

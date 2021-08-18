<?php

namespace mmaurice\api\infoflot\shemas;

class CruisePhotosShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'position' => ['integer'],
        'filename' => ['string'],
        'filetype' => ['string'],
        'description' => ['string'],
    ];
}

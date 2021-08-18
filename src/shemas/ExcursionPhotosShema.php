<?php

namespace mmaurice\api\infoflot\shemas;

class ExcursionPhotosShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'position' => ['integer'],
        'filename' => ['string'],
        'filetype' => ['string'],
        'description' => ['string'],
    ];
}

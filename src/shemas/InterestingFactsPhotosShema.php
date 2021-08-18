<?php

namespace mmaurice\api\infoflot\shemas;

class InterestingFactsPhotosShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filename' => ['string'],
        'filetype' => ['string'],
        'description' => ['string'],
    ];
}

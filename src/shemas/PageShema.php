<?php

namespace mmaurice\api\infoflot\shemas;

class PageShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'num' => ['integer'],
        'url' => ['string'],
    ];
}

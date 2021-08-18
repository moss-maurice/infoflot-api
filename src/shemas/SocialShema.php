<?php

namespace mmaurice\api\infoflot\shemas;

class SocialShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'vk' => ['string'],
        'fb' => ['string'],
        'ig' => ['string'],
        'tw' => ['string'],
        'yt' => ['string'],
        'ok' => ['string'],
    ];
}

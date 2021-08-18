<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\ShipPhotosShema;

class CabinShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'deck' => ['integer'],
        'name' => ['string'],
        'photos' => [ShipPhotosShema::class],
    ];
}

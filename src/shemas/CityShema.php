<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CityPhotoShema;
use \mmaurice\api\infoflot\shemas\CityPhotosShema;
use \mmaurice\apigate\types\ArrayType;

class CityShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'photo' => [CityPhotoShema::class],
        'photos' => [[CityPhotosShema::class, ArrayType::class]],
    ];
}

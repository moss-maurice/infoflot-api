<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CityPhotoShema;
use \mmaurice\api\infoflot\shemas\CityPhotosShema;
use \mmaurice\apigate\types\ArrayType;

class CityPhotosShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'filename' => ['string'],
        'filetype' => ['string'],
        'description' => ['string'],
    ];
}

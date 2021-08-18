<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\ShipIdCabinTypeAmenitiesSheme;
use \mmaurice\api\infoflot\shemas\ShipIdCabinTypeClassSheme;
use \mmaurice\api\infoflot\shemas\ShipIdCabinTypeFriendlyNameSheme;
use \mmaurice\apigate\types\ArrayType;

class ShipIdCabinTypesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'photos' => [['string', ArrayType::class]],
        'friendlyName' => [ShipIdCabinTypeFriendlyNameSheme::class],
        'class' => [ShipIdCabinTypeClassSheme::class],
        'amenities' => [ShipIdCabinTypeAmenitiesSheme::class],
    ];
}

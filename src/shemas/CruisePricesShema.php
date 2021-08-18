<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CruiseDiscountShema;
use \mmaurice\api\infoflot\shemas\CruisePhotosShema;
use \mmaurice\api\infoflot\shemas\CruiseShipShema;
use \mmaurice\api\infoflot\shemas\CruiseTypeShema;
use \mmaurice\api\infoflot\shemas\PopularRouteShema;
use \mmaurice\api\infoflot\shemas\RegionShema;
use \mmaurice\api\infoflot\shemas\RiverShema;
use \mmaurice\api\infoflot\shemas\TimetableShema;
use \mmaurice\apigate\types\ArrayType;
use \mmaurice\apigate\types\DateIso8601Type;

class CruisePricesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'min' => ['integer'],
    ];
}

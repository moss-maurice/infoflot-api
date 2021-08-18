<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\ShipFileShema;

class ShipFilesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'photo' => [ShipFileShema::class],
        'scheme' => [ShipFileShema::class],
        'schemeFlash' => [ShipFileShema::class],
        'captainPhoto' => [ShipFileShema::class],
    ];
}

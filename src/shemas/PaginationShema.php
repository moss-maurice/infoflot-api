<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\PagesShema;
use \mmaurice\api\infoflot\shemas\RecordsShema;

class PaginationShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'pages' => [PagesShema::class],
        'records' => [RecordsShema::class],
    ];
}

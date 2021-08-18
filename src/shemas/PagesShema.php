<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\PageShema;

class PagesShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'total' => ['integer'],
        'current' => [PageShema::class],
        'next' => [PageShema::class],
        'previous' => [PageShema::class],
    ];
}

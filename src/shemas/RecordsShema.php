<?php

namespace mmaurice\api\infoflot\shemas;

class RecordsShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'total' => ['integer'],
        'onCurrentPage' => ['integer'],
        'perPage' => ['integer'],
    ];
}

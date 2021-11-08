<?php

namespace mmaurice\api\infoflot\methods\ports;

use \mmaurice\api\infoflot\shemas\ErrorShema;
use \mmaurice\api\infoflot\shemas\PortShema;

final class GetMethod extends \mmaurice\api\infoflot\builders\MethodBuilder
{
    protected static $rules = [
        'id' => ['integer', true],
    ];

    protected static $shemas = [
        200 => PortShema::class,
        403 => ErrorShema::class,
        404 => ErrorShema::class,
    ];

    protected function method()
    {
        return self::GET;
    }

    protected function url($url = '')
    {
        return parent::url('ports/<id>');
    }
}

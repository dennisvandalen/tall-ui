<?php

namespace DennisVanDalen\TallUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DennisVanDalen\TallUi\TallUi
 */
class TallUi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DennisVanDalen\TallUi\TallUi::class;
    }
}

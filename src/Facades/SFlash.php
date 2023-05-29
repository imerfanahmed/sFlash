<?php

namespace Eru\SFlash\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eru\SFlash\SFlash
 */
class SFlash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eru\SFlash\SFlash::class;
    }
}

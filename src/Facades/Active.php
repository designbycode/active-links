<?php

namespace DesignByCode\ActiveLinks\Facades;

use Illuminate\Support\Facades\Facade;

class Active extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor(): string
    {
        return 'active';
    }
}

<?php

namespace Spits\WeFactApi\Facades;

use Illuminate\Support\Facades\Facade;

/*
 * @see Spits\WeFactApi\WeFact
 * @see Spits\WeFactApi\WeFact
 */

class WeFact extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return config('wefact.type');
    }
}
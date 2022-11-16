<?php

namespace CUCustomApps\Feed\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CUCustomApps\Feed\Feed
 */
class Feed extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CUCustomApps\Feed\Feed::class;
    }
}

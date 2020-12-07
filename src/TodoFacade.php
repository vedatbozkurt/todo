<?php

namespace Wedat\Todo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wedat\Todo\Skeleton\SkeletonClass
 */
class TodoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'todo';
    }
}

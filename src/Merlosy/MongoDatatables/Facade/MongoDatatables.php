<?php namespace Merlosy\MongoDatatables\Facades;

use Illuminate\Support\Facades\Facade;

class Profiler extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'MongoDatatables'; }

}
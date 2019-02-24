<?php

namespace Gregoriohc\LaravelTrello\Facades;

use Gregoriohc\LaravelTrello\TrelloServiceProvider;
use Illuminate\Support\Facades\Facade;

class Trello extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return TrelloServiceProvider::BOOT_NAME; }

}
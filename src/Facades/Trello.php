<?php

namespace Gregoriohc\LaravelTrello\Facades;

use Gregoriohc\LaravelTrello\TrelloServiceProvider;
use Gregoriohc\LaravelTrello\Wrapper;
use Illuminate\Support\Facades\Facade;
use Trello\Manager;

/**
 * Class Trello
 *
 * @package Gregoriohc\LaravelTrello\Facades
 *
 * @method static Manager manager()
 * @method static bool|string getObjectId($type, $name, $options = [])
 * @method static bool|string getDefaultOrganizationId()
 * @method static bool|string getDefaultBoardId()
 * @method static bool|string getDefaultListId()
 *
 * @see     Wrapper
 *
 */
class Trello extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return TrelloServiceProvider::BOOT_NAME; }

}
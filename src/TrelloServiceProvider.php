<?php

namespace Gregoriohc\LaravelTrello;

use Gregoriohc\LaravelTrello\Facades\Trello;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class TrelloServiceProvider extends LaravelServiceProvider {

    const BOOT_NAME = 'trello.wrapper';

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        $this->handleConfigs();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        $this->app->singleton(Trello::class, function($app) {
            return new Wrapper($app['config']);
        });

        $this->app->alias(Trello::class, TrelloServiceProvider::BOOT_NAME);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {

        return [
            TrelloServiceProvider::BOOT_NAME,
        ];
    }

    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/trello.php';

        $this->publishes([$configPath => config_path('trello.php')]);

        $this->mergeConfigFrom($configPath, 'trello');
    }
}

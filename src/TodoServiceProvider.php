<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-07 19:59:49
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-07 22:33:20
 */

namespace Wedat\Todo;

use Illuminate\Support\ServiceProvider;
use Wedat\Todo\Console\InstallTodoPackage;

use Illuminate\Support\Facades\Route;

class TodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'todo');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'todo');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->registerRoutes();

        if ($this->app->runningInConsole()) {

            // php artisan vendor:publish --provider="Wedat\Todo\TodoServiceProvider" --tag="migrations"
            if (! class_exists('CreateTodosTable')) {
                $this->publishes([
                  __DIR__ . '/../database/migrations/create_todos_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_todos_table.php'),
                  // you can add any number of migrations here
                ], 'migrations');
            }

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('todo.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/todo'),
            ], 'views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/todo'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/todo'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
            $this->commands([
                InstallTodoPackage::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'todo');

        // Register the main class to use with the facade
        $this->app->singleton('todo', function () {
            return new Todo;
        });
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
        'prefix' => config('todo.prefix'),
        // 'middleware' => config('todo.middleware'),
    ];
    }
}

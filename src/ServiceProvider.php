<?php

namespace Acelle\Plugins\RotaryMailScheduler;

use Acelle\Model\Plugin;
use Illuminate\Support\Facades\Event;
use Acelle\Library\Contracts\PluginInterface;

class ServiceProvider implements PluginInterface
{
    protected $plugin;

    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }

    public function register()
    {
        // Register routes
        require __DIR__.'/../routes/web.php';

        // Register views
        app('view')->addNamespace('RotaryMailScheduler', __DIR__.'/../resources/views');

        // Merge config
        $this->mergeConfigFrom(__DIR__.'/../config/scheduler.php', 'rotarymail');
    }

    public function boot()
    {
        // Add admin menu item
        Event::listen('admin.top_menu', function() {
            return [
                'title' => 'Rotary Scheduler',
                'url' => route('rotarymail.dashboard'),
                'icon' => 'icon-refresh'
            ];
        });
    }

    public function activate()
    {
        // Run migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function getSettingsUrl()
    {
        return route('rotarymail.settings');
    }

    // Helper methods
    private function mergeConfigFrom($path, $key)
    {
        config([$key => array_merge(require $path, config($key, []))]);
    }

    private function loadMigrationsFrom($path)
    {
        $this->app->afterResolving('migrator', function ($migrator) use ($path) {
            $migrator->path($path);
        });
    }
}
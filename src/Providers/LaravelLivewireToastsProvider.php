<?php

namespace Bastinald\LaravelLivewireToasts\Providers;

use Bastinald\LaravelLivewireToasts\Components\Toasts;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireToastsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-livewire-toasts');

        $this->publishes(
            [__DIR__ . '/../../config/laravel-livewire-toasts.php' => config_path('laravel-livewire-toasts.php')],
            ['laravel-livewire-toasts', 'laravel-livewire-toasts:config']
        );

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/laravel-livewire-toasts')],
            ['laravel-livewire-toasts', 'laravel-livewire-toasts:views']
        );

        Livewire::component('toasts', Toasts::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-livewire-toasts.php', 'laravel-livewire-toasts');
    }
}

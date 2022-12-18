<?php

namespace DennisVanDalen\TallUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class TallUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/ui'),
        ]);

        $this->callAfterResolving(BladeCompiler::class, function () {
            Blade::component('ui::components.container', 'ui-container');
            Blade::component('ui::components.h2-title', 'ui-h2-title');
        });
    }
}

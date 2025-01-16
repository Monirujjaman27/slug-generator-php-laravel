<?php

namespace Monirujjaman27\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class SlugGeneratorServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('slug-generator', function () {
            return new \Monirujjaman27\UniqueSlugGenerator\SlugGenerator();
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../config/slug-generator.php',
            'slug-generator'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/slug-generator.php' => config_path('slug-generator.php'),
        ], 'config');
    }
}

<?php

namespace SinonJZH\LaravelL2d;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/public/laravel-l2d/waifu-tips.json' => public_path('/vendor/laravel-l2d/waifu-tips.json'),
            __DIR__.'/resources/js/autoload.js' => resource_path('/js/laravel-l2d/autoload.js'),
            __DIR__.'/resources/js/live2d.min.js' => resource_path('/js/laravel-l2d/live2d.min.js'),
            __DIR__.'/resources/sass/waifu.scss' => resource_path('/sass/laravel-l2d/waifu.scss'),
        ]);
    }
}

<?php

use Illuminate\Support\Facades\Facade;

return [
    'name' => env('APP_NAME', 'Brockmeyer Consulting'),
    'env'  => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'url'   => env('APP_URL', 'http://localhost'),
    'timezone' => 'Europe/Berlin',
    'locale' => 'de',
    'fallback_locale' => 'de',
    'faker_locale' => 'de_DE',
    'cipher' => 'AES-256-CBC',
    'key' => env('APP_KEY'),
    'maintenance' => ['driver' => 'file'],
    'providers' => Illuminate\Support\ServiceProvider::defaultProviders()->merge([
        App\Providers\AppServiceProvider::class,
    ])->toArray(),
];

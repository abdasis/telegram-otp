<?php

namespace App\Providers;

use App\Services\TelegramOTPService;
use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(TelegramOTPService::class, function ($app) {
            return new TelegramOTPService();
        });
    }

    public function boot(): void
    {
    }
}

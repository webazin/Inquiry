<?php

namespace Webazin\Inquiry;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Webazin\Inquiry\Services\Jibit\Jibit;
use Webazin\Inquiry\Services\Nextpay\Nextpay;

class InquiryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/inquiry.php', 'inquiry'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        App::bind('Inquiry', function () {
            return match (config('webazin.inquiry.default')) {
                'nextpay' => new Nextpay(),
                default => new Jibit()
            };
        });

        $this->publishes([
            __DIR__ . '/config/inquiry.php' => config_path('inquiry.php'),
        ]);
    }
}

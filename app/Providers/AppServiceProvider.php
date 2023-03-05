<?php

namespace App\Providers;

use App\WebScraper\Implementations\WLDnsSystem;
use App\WebScraper\Implementations\JsonFormatter;
use App\WebScraper\Implementations\SortByPrice;
use App\WebScraper\Interfaces\WebScraper;
use App\WebScraper\Interfaces\ResultFormatter;
use App\WebScraper\Interfaces\SortStrategy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Models\ExamDate;
use App\Observers\ExamDateObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ExamDate::observe(ExamDateObserver::class);
    }
}

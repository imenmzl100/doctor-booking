<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

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
        // هذه الإضافة هي التي ستقوم بإنشاء الجداول في قاعدة البيانات تلقائياً
        Schema::defaultStringLength(191);
        
        try {
            Artisan::call('migrate --force');
        } catch (\Exception $e) {
            // يمكن تركها فارغة، الغرض هو تشغيل المايجريشن فقط
        }
    }
}

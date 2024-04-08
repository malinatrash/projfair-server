<?php

namespace App\Providers;

use App\Http\Services\HarvestSettingService;
use App\Http\Services\StateParticipationService;
use Illuminate\Http\Resources\Json\JsonResource;
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
        $this->app->singleton(
            StateParticipationUtil::class,
            fn () =>
            new StateParticipationService()
        );
        $this->app->singleton(
            HarvestSettingService::class,
            fn () =>
            new HarvestSettingService()
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (env('APP_DEVELOPMENT')) {
            setcookie('karbushevgdeadminka', 'AMOGUS');
        }
        JsonResource::withoutWrapping(); // Не оборачивать данные в поле data при использовании ресурсов
        //нужно уточнить
        // \URL::forceScheme('https'); TODO WHEN UPLOADING ON ISTU SERVER UNCOMMENT THIS LINE
    }
}

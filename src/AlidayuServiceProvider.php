<?php
/**
 * description:
 * date: 2017/4/1 10:37
 * author: fa.zeng
 * version: 1.0
 */

namespace Aliwuyun\Alidayu;

use Illuminate\Support\ServiceProvider;

/**
 * Class AlidayuServiceProvider
 * @package Aliwuyun\Alidayu
 * @author fa.zeng
 */
class AlidayuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/alidayu.php' => config_path('alidayu.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('alidayu', function () {
            return new Alidayu();
        });

        $this->mergeConfigFrom(
            __DIR__.'/config/alidayu.php', 'alidayu'
        );
    }

    /**
     * description:
     * @return array
     */
    public function provides()
    {
        return ['alidayu'];
    }
}

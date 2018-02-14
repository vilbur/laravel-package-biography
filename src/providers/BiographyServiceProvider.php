<?php namespace Vilbur\Biography\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class BiographyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
		/* ROUTES */
		$this->loadRoutesFrom(	__DIR__.'/../routes/routes.php');

		/* VIEWS */
		$this->loadViewsFrom(	__DIR__.'/../../publish/views', 'Biography');

		/* CONFIG */
		$this->mergeConfigFrom(	__DIR__.'/../../publish/config/Biography.php', 'Biography');

		/* FACTORIES */
	    $this->registerEloquentFactoriesFrom(__DIR__.'/../database/factories');

		/* PUBLISH */
		$this->publishes([

			/* DATABASE */
			__DIR__.'/../../publish/database'	=> $this->app->databasePath(),

			/* ASSETS JS */
			__DIR__.'/../../publish/resources/assets/js'	=> resource_path("assets/js/biography"), // DISABLED PUBLISHING ON PACKAGE DEVELOPMENT

			/* ASSETS SASS */
			__DIR__.'/../../publish/resources/assets/sass'	=> resource_path("assets/sass/biography"), // DISABLED PUBLISHING ON PACKAGE DEVELOPMENT

		], 'vilbur/biography');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(){

        $this->app->bind('Biography', function(){
            return new \Vilbur\Biography\Biography;
        });

    }
    /**
     * Register factories.
     * Forum: https://github.com/laravel/framework/issues/11881#issuecomment-261688266
     *
     * @param  string  $path
     * @return void
     */
    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}

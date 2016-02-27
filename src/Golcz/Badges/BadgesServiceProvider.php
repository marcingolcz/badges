<?php

namespace Golcz\Badges;

use Illuminate\Support\ServiceProvider;

class BadgesServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
            __DIR__.'/../../../public' => public_path('badges'),
		], 'public');

		$this->loadViewsFrom(__DIR__ . '/../../resources/views', 'badges');

		if (! $this->app->routesAreCached()) {
			require __DIR__.'/../../routes.php';
		}
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app['badge'] = $this->app->share(function($app)
		{
			return new Badge;
		});

		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Badge', 'Golcz\Badges\Facades\Badge');
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('badge');
	}

}

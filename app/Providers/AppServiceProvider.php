<?php

  namespace App\Providers;

  use AlgoliaSearch\Client;
  use App\contracts\Search;
  use App\Services\AlgoliaSearch;
  use Illuminate\Support\ServiceProvider;

  class AppServiceProvider extends ServiceProvider
  {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

      $this->app->bind(AlgoliaSearch::class, function () {
        return new AlgoliaSearch(new Client(config('scout.algolia.id'), config('scout.algolia.secret')));
      });
    }
  }

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Content;
use App\ContentLive;
use Validator;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Validator::extend(
        //   'recaptcha',
        //   'App\\Validators\\ReCaptchaController@validate'
        // );

        // Blade::setEchoFormat('e(utf8_encode(%s))');
        // \Blade::setEchoFormat('nl2br(e(%s))');
        view()->composer('admin.preview.partials._footer', function($view) {
          $view->with('footer', Content::footer()->get());
        });

        view()->composer('admin.preview.partials._navbar', function($view){
          $m1 = Content::menu()->where('placement', '1')->first();
          $m2 = Content::menu()->where('placement', '2')->first();
          $m3 = Content::menu()->where('placement', '3')->first();
          $m4 = Content::menu()->where('placement', '4')->first();
          $view->with(compact('m1', 'm2', 'm3', 'm4'));
        });

        view()->composer('partials._navbar', function($view){
          $m1 = ContentLive::menu()->where('placement', '1')->first();
          $m2 = ContentLive::menu()->where('placement', '2')->first();
          $m3 = ContentLive::menu()->where('placement', '3')->first();
          $m4 = ContentLive::menu()->where('placement', '4')->first();
          $view->with(compact('m1', 'm2', 'm3', 'm4'));
        });

        view()->composer('partials._footer', function($view) {
          $view->with('footer', ContentLive::footer()->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

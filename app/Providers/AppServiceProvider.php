<?php
namespace App\Providers;
use App\Post;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['*'], function ($view) {
            
           
            $global_latest_blogs = Post::with('author')->where("status", '=', 'PUBLISHED')->orderBy('created_at', 'desc')->take(3)->get();
            $view->with('global_latest_blogs', $global_latest_blogs);
           
        });
    }
}

<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $languages = Language::all();
            $tests = Test::where('is_hidden', false)->get();
            $categories = Category::all();
            $exams = Exam::all();
            $levels = Exam::select('level', DB::raw('count(*) as total'))
                ->groupBy('level')
                ->get();

            $view->with(compact('languages', 'tests', 'categories', 'exams', 'levels'));
        });
    }
}

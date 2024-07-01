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
        View::composer(['layouts.inc.admin.header'], function ($view) {
            $header_languages = Language::all();
            $header_tests = Test::where('is_hidden', false)->get();
            $header_categories = Category::all();
            $header_exams = Exam::all();
            $header_levels = Exam::select('level', DB::raw('count(*) as total'))
                ->groupBy('level')
                ->get();

            $view->with(compact('header_languages', 'header_tests', 'header_categories', 'header_exams', 'header_levels'));
        });
    }
}

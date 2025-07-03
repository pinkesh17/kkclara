<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\HomeController;





/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [HomeController::class, 'index']);

Auth::routes();


require __DIR__.'/authuser.php';


/*
Route::get('/', [HomeController::class, 'index']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


*/


















/*

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\StaticPagesController;
use App\Http\Controllers\Front\CalculatorController;
use App\Http\Controllers\Front\CoachingController;

use App\Http\Controllers\Front\SearchController;

use App\Http\Controllers\Front\SitemapController;








Route::get('/', [HomeController::class, 'index']);
Route::get('about', [StaticPagesController::class, 'about']);


Route::get('onboarding', [CalculatorController::class, 'index']);
Route::get('calculator', [CalculatorController::class, 'calculatorTDEE']);
Route::post('calculator', [CalculatorController::class, 'calculatorTDEEPost']);


/*Seprate Calculator*
Route::get('goal-identification', [CalculatorController::class, 'goalIdentification']);




Route::get('personalized-workout', [CalculatorController::class, 'personalizedWorkout']);
Route::post('personalized-workout', [CalculatorController::class, 'personalizedWorkoutPost']);

Route::get('coaching', [CoachingController::class, 'index']);


/*Search*
Route::get('search', [SearchController::class, 'index']);
Route::get('search/{url}', [SearchController::class, 'search']);

Route::middleware(['htmlMinifier'])->group(function () {

    /*Articles*
    Route::get('articles', [ArticleController::class, 'index']);
    Route::get('article', [ArticleController::class, 'article']);

    Route::get('{article_url}-ardtl',
                [ArticleController::class, 'articleDetails'])
                ->where(['article_url' => '[a-z0-9-]+']);

});




/*Route::get('{college_url}-cldtl',
            [CollegeController::class, 'collegeDetails'])
            ->where(['college_url' => '[a-z-]+']);*/


/*Route::get('calculator-fitness-goals', [CalculatorController::class, 'calculatorFitnessGoals']);
Route::post('calculator-fitness-goals', [CalculatorController::class, 'calculatorFitnessGoalsPost']);

Route::get('calculator-tdee-personalization', [CalculatorController::class, 'calculatorTdeePersonalization']);
Route::post('calculator-tdee-personalization', [CalculatorController::class, 'calculatorTdeePersonalizationPost']);*


Route::get('calculator-result', [CalculatorController::class, 'calculatorResult']);


/*SiteMaps*
/*Route::get('sitemap-blog-{num}.xml', [SitemapController::class, 'index'])
        ->where(['num' => '[0-9-]+']);*

Route::get('sitemaps/articles.xml', [SitemapController::class, 'index'])
        ->where(['num' => '[0-9-]+']);

Route::get('sitemaps/article-categories.xml', [SitemapController::class, 'articleCategories'])
        ->where(['num' => '[0-9-]+']);

/*Route::get('college-{url}-in-{post}-clst',CollegeComponent::class)
        ->where(['url' => '[a-z0-9-]+', 'post' => '[0-9-]+']);*





require __DIR__.'/auth.php';
require __DIR__.'/admin.php';




Route::any('{catchall}',[ErrorPageController::class, 'notfound'])->where('catchall', '.*');*/
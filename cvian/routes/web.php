<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('abouts', 'Dashboard\AboutController@aboutfrontend')->name('abouts');
Route::get('dashboard/abouts', 'Dashboard\AboutController@index')->name('dashboard/abouts');
Route::post('dashboard/abouts/store', 'Dashboard\AboutController@store');
Route::patch('dashboard/abouts/update/{id}', 'Dashboard\AboutController@update');
Route::patch('dashboard/abouts/deactivate/{id}', 'Dashboard\AboutController@deactivate');
Route::patch('dashboard/abouts/activate/{id}', 'Dashboard\AboutController@activate');

Route::get('skills', 'Dashboard\SkillController@skillfrontend')->name('skills');
Route::get('dashboard/skills', 'Dashboard\SkillController@index')->name('dashboard/skills');
Route::post('dashboard/skills/store', 'Dashboard\SkillController@store');
Route::patch('dashboard/skills/update/{id}', 'Dashboard\SkillController@update');
Route::patch('dashboard/skills/deactivate/{id}', 'Dashboard\SkillController@deactivate');
Route::patch('dashboard/skills/activate/{id}', 'Dashboard\SkillController@activate');

Route::get('services', 'Dashboard\ServiceController@servicefrontend')->name('services');
Route::get('dashboard/services', 'Dashboard\ServiceController@index')->name('dashboard/services');
Route::post('dashboard/services/store', 'Dashboard\ServiceController@store');
Route::patch('dashboard/services/update/{id}', 'Dashboard\ServiceController@update');
Route::patch('dashboard/services/deactivate/{id}', 'Dashboard\ServiceController@deactivate');
Route::patch('dashboard/services/activate/{id}', 'Dashboard\ServiceController@activate');


Route::get('dashboard/services-types', 'Dashboard\ServiceTypeIconController@index')->name('dashboard/services-types');
Route::post('dashboard/services-types/store', 'Dashboard\ServiceTypeIconController@store');
Route::patch('dashboard/services-types/update/{id}', 'Dashboard\ServiceTypeIconController@update');
Route::patch('dashboard/services-types/deactivate/{id}', 'Dashboard\ServiceTypeIconController@deactivate');
Route::patch('dashboard/services-types/activate/{id}', 'Dashboard\ServiceTypeIconController@activate');


Route::get('experiences', 'Dashboard\ExperienceController@experiencefrontend')->name('experiences');
Route::get('dashboard/experiences', 'Dashboard\ExperienceController@index')->name('dashboard/experiences');
Route::post('dashboard/experiences/store', 'Dashboard\ExperienceController@store');
Route::patch('dashboard/experiences/update/{id}', 'Dashboard\ExperienceController@update');
Route::patch('dashboard/experiences/deactivate/{id}', 'Dashboard\ExperienceController@deactivate');
Route::patch('dashboard/experiences/activate/{id}', 'Dashboard\ExperienceController@activate');

Route::get('educations', 'Dashboard\EducationController@educationfrontend')->name('educations');
Route::get('dashboard/educations', 'Dashboard\EducationController@index')->name('dashboard/educations');
Route::post('dashboard/educations/store', 'Dashboard\EducationController@store');
Route::patch('dashboard/educations/update/{id}', 'Dashboard\EducationController@update');
Route::patch('dashboard/educations/deactivate/{id}', 'Dashboard\EducationController@deactivate');
Route::patch('dashboard/educations/activate/{id}', 'Dashboard\EducationController@activate');

Route::get('portfolios', 'Dashboard\PortfolioController@portfoliofrontend')->name('portfolios');
Route::get('dashboard/portfolios', 'Dashboard\PortfolioController@index')->name('dashboard/portfolios');
Route::post('dashboard/portfolios/store', 'Dashboard\PortfolioController@store');
Route::patch('dashboard/portfolios/update/{id}', 'Dashboard\PortfolioController@update');
Route::patch('dashboard/portfolios/deactivate/{id}', 'Dashboard\PortfolioController@deactivate');
Route::patch('dashboard/portfolios/activate/{id}', 'Dashboard\PortfolioController@activate');

Route::get('dashboard/portfolio-types', 'Dashboard\PortfolioTypeController@index')->name('dashboard/portfolio-types');
Route::post('dashboard/portfolio-types/store', 'Dashboard\PortfolioTypeController@store');
Route::patch('dashboard/portfolio-types/update/{portfoliotype}', 'Dashboard\PortfolioTypeController@update');
Route::patch('dashboard/portfolio-types/deactivate/{portfoliotype}', 'Dashboard\PortfolioTypeController@deactivate');
Route::patch('dashboard/portfolio-types/activate/{id}', 'Dashboard\PortfolioTypeController@activate');

// Route::get('dashboard/portfolios', 'Dashboard\PortfolioController@index')->name('dashboard/portfolios');
// Route::get('dashboard/portfolios/create', 'Dashboard\PortfolioController@create');
// Route::post('dashboard/portfolios', 'Dashboard\PortfolioController@store');
// Route::get('dashboard/portfolios', 'Dashboard\PortfolioController@show');
// Route::get('dashboard/portfolios', 'Dashboard\PortfolioController@edit');
// Route::patch('dashboard/portfolios/{portfolio}', 'Dashboard\PortfolioController@update');
// Route::delete('dashboard/portfolios', 'Dashboard\PortfolioController@destroy');


Route::Resource('student', 'StudentController');

<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;
use App\Models\Project;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {});

Route::resource('product', ProductController::class)->names('products');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/newsletter/monthly', function () {
    return view('monthly_newsletter');
})->name('monthly_newsletter');

Route::get('/donations', function () {
    return view('donations_page');
})->name('donations');


Route::get('/', function () {
    $projects = Project::all();
    return view('homepage', compact('projects'));
});

Route::get('/about', function () {

    return view(view: 'about');
})->name('about');


Route::get('/documents', function () {
    return view('documents');
})->name('documents');


Route::get('/team', function () {
    return view('team');
})
    ->name('team');

Route::get('/singleProject', function () {
    return view('singleProject');
})->name('singleProject');


Route::get('/volunteers', [VolunteerController::class, 'index'])->name('volunteers.showAll');
Route::get('volunteer/{volunteer}', [VolunteerController::class, 'show'])->name('volunteers.show');

Route::get('/newsletterPage', function () {
    return view('newsletterPage');
})->name('newsletterPage');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/volunteer_application' , function () {
    return view ('volunteer_application');
})->name('volunteer_application');

Route::get('/team_member', function () {

    return view(view: 'team_member');
})->name('team_member');

Route::get('/singleNewsletterPage', function () {
    return view('singleNewsLetterPage');
})->name('singleNewsLetterPage');

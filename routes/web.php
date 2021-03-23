<?php

use App\Http\Livewire\Tabler\Admin\Index as AdminIndex;
use App\Http\Livewire\Tabler\Pages\Index;
use App\Http\Livewire\Tabler\User\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('0 tabler.layout.layout');
    return redirect()->route('tabler.index');
})->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\TablerController::class, 'pdf'])->name('pdf');

//===============================================================================================================================
// Tabler Template
//===============================================================================================================================
Route::middleware(['auth'])->group(
    function () {

        Route::get('tablers', Index::class)->name('tabler.index');
        // Config
        Route::get('tablers/config/profile',    Profile::class)->name('tabler.config.profile');
        // Admin
        Route::get('tablers/admin',    AdminIndex::class)->name('tabler.admin.index');
        Route::get('/tabler/logout', function () {
            Auth::logout();
            return redirect()->route('index');
        })->name('tabler.logout');

    });

//===============================================================================================================================
// Infyom Routes
//===============================================================================================================================

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');

//===============================================================================================================================
// Models
//===============================================================================================================================

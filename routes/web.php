<?php
Route::get('/', static function () {
    return view('app');
});

Route::post('/project', 'ProjectController@lead')->name('project');

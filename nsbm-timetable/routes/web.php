<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TimetableController;
use App\Timetable;

// Switch between the included languages
Route::get('lang/{lang}', [LanguageController::class, 'swap']);

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    include_route_files(__DIR__.'/backend/');
});
Route::get('/timetableview', function () {
 
    if(Auth::check()){
        $data = DB::table('timetables')->whereDate('date', '=', date('Y-m-d'))->get();
        return view('frontend.user.timetableview')->withTimeTable($data);
    }
    else{

        return redirect('/login')->with('msg','Logged in needed');
    }
});

Route::post('savett', 'TimetableController@store');

Route::get('/deleterecode/{id}','TimetableController@deleterecode');
Route::get('/updaterecode/{id}','TimetableController@updaterecode');
Route::post('/updatedetails', 'TimetableController@storeupdate');

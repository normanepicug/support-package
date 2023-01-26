<?php
Route::namespace('Normanepicug\Support\Http\Controllers')->group(function (){
    Route::resource('support',SupportController::class);
});


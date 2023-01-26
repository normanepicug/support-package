<?php
Route::namespace('Haroob\Support\Http\Controllers')->group(function (){
    Route::resource('support',SupportController::class);
});


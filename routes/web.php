<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/account-settings', function(){
    return view('account_settings');
});
Route::get('/settings-updated', function(){
    return view('account_settings');
});

Route::post('/account-settings', function(Request $request){
    $request->validate([
       "first_name" => "required",
       "last_name" => "required",
       "username" => "required",
       "email" => "required|email",
       "onboarding_data" => "boolean|required_without:loan_origination_data",
       "loan_origination_data" => "boolean|required_without:onboarding_data",
    ]);
    try {
        \Mail::send(new \App\Mail\AccountSettingsMail($request->all()));
        return redirect()->to('settings-updated');
    }catch (error){
        return back();
    }
});

Route::post('/subscribe', [\App\Http\Controllers\MailListController::class, 'store'])->name('join.maillist');

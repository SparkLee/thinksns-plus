<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/{name?}', function (Request $request, $name = null) {
//     dd($request);
// })
// ->middleware('auth:api');

Route::group([
    'namespace' => 'Api',
], function ($routes) {

    // 获取手机验证码
    Route::post('/auth/get-phone-code', 'AuthController@getPhoneCode');

    Route::post('/auth/register', 'AuthController@register')
        ->middleware(App\Http\Middleware\VerifyPhoneCode::class);
});
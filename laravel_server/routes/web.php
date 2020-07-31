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
Route::resource('registration', 'RegistrationController@Registration');
Route::resource('login', 'LoginController@Login');
Route::resource('quest_tutorial', 'QuestController@Tutorial');
Route::resource('quest_start', 'QuestController@Start');
Route::resource('quest_end', 'QuestController@End');
Route::resource('character', 'CharacterController@GetCharacterList');
Route::resource('character_sell', 'CharacterController@SellCharacter');
Route::resource('/gacha', 'GachaController@DrawGacha');
Route::resource('/shop', 'ShopController@BuyItem');
Route::resource('/present_list', 'presentController@GetPresentList');
Route::resource('/present', 'presentController@GetItem');


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::POST('/candidate', ['name' => 'candidate.save', 'uses' => 'Api\CandidateController@saveCandidato']);
Route::POST('/candidateupdate', ['name' => 'candidate.update', 'uses' => 'Api\CandidateController@updateCandidato']);
Route::POST('/deletecandidate/{id}', ['name' => 'candidate.delete', 'uses' => 'Api\CandidateController@deleteCandidato']);
Route::GET('/getcandidate', ['name' => 'candidate.get', 'uses' => 'Api\CandidateController@getCandidatos']);
Route::POST('/editcandidate/{id}', ['name' => 'candidate.edit', 'uses' => 'Api\CandidateController@editCandidato']);



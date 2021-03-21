<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/plans',App\Http\Controllers\Api\V1\PlanController::class)->middleware('auth:sanctum');
Route::apiResource('v1/teachers',App\Http\Controllers\Api\V1\TeacherController::class)->middleware('auth:sanctum');



//auth

Route::post('login',[
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
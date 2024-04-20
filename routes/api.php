<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProjectController;
use App\Http\Controllers\Api\V1\CompleteProjectController;
use App\Http\Controllers\CharacterController;

Route::prefix('v1')->group(function () {
    Route::apiResource('/projects', ProjectController::class);
    Route::patch('/projects/{project}/complete', CompleteProjectController::class);
    
    Route::apiResource('/characters', CharacterController::class);
});
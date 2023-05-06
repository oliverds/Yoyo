<?php

use Illuminate\Support\Facades\Route;
use Spatie\RouteDiscovery\Discovery\Discover;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Discover::views()->in(resource_path('views/discovery'));
Discover::controllers()->in(app_path('Http/Controllers/Discovery'));

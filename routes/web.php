<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Facades\Greeting;

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

Route::get('/greeting/{name?}', function (?string $name = null) {
    return Response::json([
        'Greeting::toGreet()' => Greeting::toGreet(),
        'Greeting::toGreet(null)' => Greeting::toGreet(null),
        'Greeting::toGreet(greeting: null)' => Greeting::toGreet(greeting: null),
        'Greeting::toGreet(null, null)' => Greeting::toGreet(null, null),
        'Greeting::toGreet(greeting: null, whom: null)' => Greeting::toGreet(greeting: null, whom: null),
        'Greeting::toGreet($name)' => Greeting::toGreet($name),
        'Greeting::toGreet(greeting: \'Hi\')' => Greeting::toGreet(greeting: 'Hi'),
        'Greeting::toGreet($name, \'Hi\')' => Greeting::toGreet($name, 'Hi'),
        'Greeting::toGreet(greeting: \'Hi\', whom: $name)' => Greeting::toGreet(greeting: 'Hi', whom: $name),
    ], options: JSON_PRETTY_PRINT);
})->whereAlpha('name');

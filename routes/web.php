<?php

use App\Models\Pricelist;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

  $pricelist = Pricelist::orderBy('updated_at', 'desc')->get();
  $doctors = [];

  foreach (glob(base_path("public/doctors/*.json")) as $filename) {
    $json = file_get_contents($filename);
    $doctor = json_decode($json, true);
    array_push($doctors, $doctor);
  }

  return view('home', [
    'pricelist' => $pricelist,
    'doctors' => $doctors
  ]);
});

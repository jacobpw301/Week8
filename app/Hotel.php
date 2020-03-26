<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Hotel extends Model
$hotels = Hotel::function_to_pull_data();

{
    $hotels = App\Flight::all();

    foreach ($hotels as $hotels) {
        return view('hotels')->with('hotels', $hotels);

    }
}


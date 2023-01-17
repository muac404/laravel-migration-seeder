<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Trains::where("departure_day","today"); // Select all from trains
        return view("homepage", compact("trains"));
    }
}

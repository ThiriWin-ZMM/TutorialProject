<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
// use Countries;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Countries::all();
        return view('countries.index',['countries'=>$countries]);
        // return $countries;
    }
}

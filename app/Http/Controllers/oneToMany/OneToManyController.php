<?php

namespace App\Http\Controllers\oneToMany;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Film;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function index(){
        $directors = Director::all();
        return view('one-to-many',['directors' => $directors]);
    }
}

<?php

namespace App\Http\Controllers\oneToOne;

use App\Http\Controllers\Controller;
use App\Models\Characters;
use App\Models\Passport;
use Illuminate\Http\Request;

class oneToOneController extends Controller
{
    public function index(){
        $users = Characters::all();
        return view('one-to-one',['users' => $users]);
    }
}

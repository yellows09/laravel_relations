<?php

namespace App\Http\Controllers\manyToMany;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function index(){
        $likes = Video::all();
        return view('many-to-many',['likes'=>$likes]);
    }
}

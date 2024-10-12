<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    public function index(){
        $datas = post::all();
        //dd($datas);
        return view('home',compact('datas'));
    }
}

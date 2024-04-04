<?php

namespace App\Http\Controllers;

use App\Models\Kostum;
use App\Models\partitur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $status = 'partitur';
        return view('home',compact('status'));
    }

    public function kostum(){
        $status = 'kostum';
        return view('home',compact('status'));
    }

    public function eror(){
        return view('pengembangan');
    }
}

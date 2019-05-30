<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;

class MainController extends Controller
{
    public function index() {
        $teams=Team::find(1);
        return view('main');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Contracts\Pagination;

class MainController extends Controller
{
    public function index() {
        $teams=Team::all();
        return view('main', compact('teams'));
    }
}

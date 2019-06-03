<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Contracts\Pagination;

class MainController extends Controller
{
    public function index() {
        $teams=Team::Paginate(10);
        return view('main', compact('teams'));
    }
}

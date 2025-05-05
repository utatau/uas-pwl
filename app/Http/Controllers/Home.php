<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
        $data = Menu::all();
        return view('menu.index', compact('data')). view('templates.footer'). view('templates.header');
    }
}

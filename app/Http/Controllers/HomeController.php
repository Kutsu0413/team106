<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class HomeController extends Controller
{
    //
    public function index(Request $request){
    {
        $items = Item::all();
        return view('home.index',['items'=>$items]);
    }
}}
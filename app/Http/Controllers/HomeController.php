<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        
        $items = Item::all();
        $items = Item::paginate(20);

        return view('home.index',['items' => $items,
        ]
    );
    }

    public function detail(Request $request)
    {
        $items = Item::find($request->id);
        return view("home.detail", ['items' => $items,
        ]
    );
    }
    
    public function search(Request $request)
    {

        $keyword = $request->input('keyword');
        //print("keyword[".$keyword."]\n");

        if($keyword){
            $items = Item::where('name', 'LIKE', "%$keyword%")->paginate(20);
        }else{
            $items = Item::select('*')->paginate(20);
            $keyword='全件表示';
        }

        return view('home.search', ['items' => $items,])->with('keyword',$keyword);
    }
}




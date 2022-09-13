<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
    * 商品一覧
    *
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
        $items = Item::orderBy('created_at', 'desc')->get();
        return view('item.index', [
            'items' => $items
        ]);
    }



    public function register() {   
            return view('item.register');  
    }

    public function itemRegister(Request $request){
        $item = new item();
        $item->user_id = 0;// Auth::id();
        $item->name = $request->name;
        $item->status = $request->status;
        $item->detail = $request->detail;
        $item->effective = $request->effective;
        $item->save();

        return redirect('item');
    }

        
    public function edit(Request $request) {
            $item = Item::where('id', '=', $request->id)->first();   
            return view('item.edit')->with([
                'item' => $item,
            ]);
        }
        
    public function itemEdit(Request $request){

        //商品情報更新のプログラム

        $Item = Item::where('id', '=', $request->id)->first();
        $Item->name = $request->name;
        $Item->status = $request->status;
        $Item->detail = $request->detail;
        $Item->effective = $request->effective; 
        $Item->save();

            return redirect('/item');
    }
}
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
        $types = Item::TYPES;
        return view('item.index', [
            'items' => $items,'types' => $types
        ]);
    }



    public function register() {   
            return view('item.register');  
    }

    public function itemRegister(Request $request){

        $request->validate([
            'name' => ['required', 'string','max:100'],
            'type' => ['required'],
            'status' => ['required']
        ],
        $varidateMessage =[
                'name.required' => '名前入力は必須です',
                'type.required' => '種別選択は必須です',
                'status.required' => 'ステータス選択は必須です'
        ]);


        $item = new item();
        $item->user_id = Auth::id();
        $item->name = $request->name;
        $item->type = $request->type;
        $item->detail = $request->detail;
        $item->status = $request->status;
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

        $request->validate([
            'name' => ['required', 'string','max:100'],
            'type' => ['required'],
            'status' => ['required']
        ],
        $varidateMessage =[
                'name.required' => '名前入力は必須です',
                'name.max:100' => '100文字以内で入力してください',
                'type.required' => '種別選択は必須です',
                'status.required' => 'ステータス選択は必須です'
        ]);

        //商品情報更新のプログラム

        $Item = Item::where('id', '=', $request->id)->first();
        $Item->name = $request->name;
        $Item->type = $request->type;
        $Item->detail = $request->detail;
        $Item->status = $request->status;
        $Item->save();

            return redirect('/item');
    }
}
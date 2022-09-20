<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(Request $request)
    {
            $User = User::all();
            \Log::channel('debug')->info($User);
            
            return view('user.user')->with([
                'User' => $User,
            ]);
        
    }

    public function edit(Request $request){
        $User = User::where('id','=',$request->id)->first();

        return view('user.edit')->with([
            'User' => $User,
        ]);
        
    }
    

    public function Useredit(Request $request){
        if($request->role==null){
            $role=1;
        }
        else{
            $role=2;
        }
        //既存のレコードを取得して、編集してから保存する
        $User = User::where('id','=',$request->id)->first();
        $User->name =$request->name;
        $User->email =$request->email;
        $User->password =$request->password;
        $User->role =$role;
        $User->save();
    
        return redirect('/user');
    }
    
    public function UserDelete(Request $request){

        //既存のレコードを取得して、削除する
        $User = User::where('id','=',$request->id)->first();
        $User->delete();
    
        return redirect('/user');
    }
    

}
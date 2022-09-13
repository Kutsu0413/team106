<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Gate;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->user = new User();
    }

    // public function index()
    // {
    //     $users = User::all();
    //     return view('account.login', [
    //         'users' => $users,
    //     ]);
    // }
    /**
     * 登録処理
     */
    public function store(Request $request)
    {
         // validationの追加

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required','email','unique:users'],
            'password' => ['required', 'min:8','confirmed']
        ],
        [
                'name.required' => 'ユーザーネームは必須です',
                'email.required'  => 'メールアドレスは必須です',
                'email.unique'  => 'メールアドレスは登録済みです',
                'password.required'  => 'パスワードは必須です',
                'password.min'  => 'パスワードは8文字以上で入力してください',
                'password.confirmed'  => 'パスワードが一致しません',
        ]);

        $registerUser = $this->user->InsertUser($request);  
        
        return redirect('/');
    }
    /**
     * ログイン処理
     */

    public function postSignin(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ],
        [
        'email.required'  => 'メールアドレスは必須です。',
        'password.required'  => 'パスワードは必須です。',
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect('test');
            //view('account.test');
    }
        return redirect()->back()->withErrors(['msg'=>'不正な入力値です']);
    }

        /**
     * ログアウト処理
     */

    public function getLogout(){
        Auth::logout();
        return redirect()->route('login')->with('flash_message', 'ログアウトしました');
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = User::all();
        return view('account.login', [
            'users' => $users,
        ]);
    }

    /**
     * 登録処理
     */
    public function store(Request $request)
    {
         // validationの追加

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required','email'],
            'password' => ['required', 'min:8', 'confirmed']
        ],
        [
                'name.required' => 'ユーザーネームは必須です。',
                'email.required'  => 'メールアドレスは必須です。',
                'password.required'  => 'パスワードは必須です。',
                'password.confirmed'  => 'パスワードが一致しません',
        ]);

        $registerUser = $this->user->InsertUser($request);  
        return view('account.login');
    }
        /**
     * ログイン処理
     */

    public function postSignin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required','email'],
            'password' => ['required', 'min:8']
        ],
        [
        'name.required' => 'ユーザーネームは必須です。',
        'email.required'  => 'メールアドレスは必須です。',
        'password.required'  => 'パスワードは必須です。',
        ]);
    if(Auth::attempt(['name' => $request->input('name'),'email' => $request->input('email'), 'password' => $request->input('password')])){
        return view('account.test');
    }
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //アカウント一覧を表示する
    public function index(Request $request){
        $title = 'アカウント一覧';

        $data = [[
            'name' => 'テストさん',
            'password' => 'qwertyuiop',
        ],[
            'name' => 'jobi',
            'password' => 'jobi'
        ]];



        //セッションに必要なキーで値を保存
        //$request->session()->put('キー名',5);

        //セッションから必要なキーの値を保存
        //$value = $request->session()->get('キー名');

        //指定したデータをセッションから削除
        //$request->session()->forget('キー名');

        //セッションすべてのデータを削除
        //$request->session()->flush();

        //セッションに指定したキーが存在するか
        /*if($request->session()->exists('キー名'))
        {

        }*/

        //dd($request->account_id);
        //Debugbar::info('あいうえお');
        //Debugbar::error('エラーだよ');

        return view('accounts/index',['title' => $title,'accounts' => $data]);
    }

    public function dologin(Request $request){
        if ($request['name'] === 'jobi' && $request['password'] === 'jobi'){
            return redirect('accounts/index');
        }
        else
        {
            return view('login');
        }
    }
}

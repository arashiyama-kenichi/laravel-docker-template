<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo(); #TodoControllerでTodoModelを使えるようにするために、インスタンス化。Todo.phpでマッピング
        $todos = $todo->all(); #レコード全取得 allメゾットのデータ型を調べる。
        // dd($todos);

        return view('todo.index', ['todos' => $todos]);  #index.blade.phpファイルにデータを渡してる。
    }

    public function create()
    {
        return view('todo.create',);
    }

    // storeメソッドの引数はどれなのか、
    // 引数がわかるために必要な知識
    //

    public function store(Request $request) 
    {
        $inputs = $request->all(); #全ての値を取得
        $todo = new Todo();
        $todo->fill($inputs); #Todo.phpに一括代入
        $todo->save();

        return redirect()->route('todo.index');
    }


}

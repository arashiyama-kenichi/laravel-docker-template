<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo(); #TodoControllerでTodoModelを使えるようにするために、インスタンス化。Todo.phpでマッピング
        $todos = $todo->all(); #レコード全取得
        

        return view('todo.index', ['todos' => $todos]);  #index.blade.phpファイルにデータを渡してる。
    }

    public function create()
    {
        return view('todo.create',);
    }

    public function store(Request $request) 
    {
        $inputs = $request->all();
        $todo = new Todo(); 
        $todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.index');
    }


}

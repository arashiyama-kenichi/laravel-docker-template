<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();

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
        $this->todo->fill($inputs);
        $this->todo->save();

        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $todo = $this->todo->find($id); 

        return view('todo.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.edit', ['todo' => $todo]);
    }

}

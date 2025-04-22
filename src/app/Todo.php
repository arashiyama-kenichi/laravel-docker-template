<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos'; # todosテーブルとMapping(DBとの関連付け)

    protected $fillable = [
        'content',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;
    
    protected $table = 'todos'; # todosテーブルとMapping(DBとの関連付け)

    protected $fillable = [
        'content',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //динамическое свойство, возвращает всех авторов статьи
    public function users(){
        return $this->belongsToMany('App\User');
    }
}

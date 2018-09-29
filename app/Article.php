<?php
declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Article extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    //пункт 1.4
    //динамическое свойство, возвращает всех авторов статьи
    public function users(){
        return $this->belongsToMany('App\User');
    }

    //пункт 4.1-3
    //является ли пользователь автором статьи
    public function isAuthor(User $user): ?bool
    {
//         возврат null если статья удалена
        if (isset($this->deleted_at)) return null;

//      все авторы статьи
        $collectionOfUsers = $this->users;

        return ($collectionOfUsers->contains($user->id)) ? true : false;

    }

}

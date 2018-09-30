<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nickname', 'surname', 'phone',
        'sex', 'showPhone', 'filenameAvatar',
        'experience'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //п.1-3
    //динамическое свойство, возвращает все статьи пользователя
    public function articles(){
        return $this->belongsToMany('App\Article');
    }

    //п.5
    static function userExp(){

        $user = User::find(1);

        $result=$user->experience;

        //TODO
        //без п.5.3
        //асинхронный метод меняет опыть на случайное число..

        return $result;
    }

}

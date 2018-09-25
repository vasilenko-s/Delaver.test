<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FormController extends Controller
{
    public function index(){

        return view('welcome');

    }


    public function store(Request $request){

//        //Validation
//        $request->validate([
//            'nickname' => 'required|max:20',
//            'name' => 'required',
//            'surname' => 'required',
//            'phone' => 'required',
//            'sex' => 'required',
//             'avatar' => 'required'
//        ]);
//
//        //Save avatar
//            $file=$request->file('avatar');
//            $filename=$file->getClientOriginalName();
//            $pathToAvatar=$file->storeAs('images', $filename);
//
//        // save form
//        User::create([
//            'nickname' => $request->input('nickname'),
//            'name' => $request->input('name'),
//            'surname' => $request->input('surname'),
//            'phone' => $request->input('phone'),
//            'sex' => $request->input('sex'),
//            'showPhone' => $request->input('showPhone', 'off'),
//            'pathToAvatar' => $pathToAvatar
//        ]);

        //редирект на страницу с введенными данными
//        return view('store');

       return view('store');
       //->withInput();

    }
}

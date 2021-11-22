<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Output\Text\GreetingService;


class UserController extends Controller
{
    public function store(Request $request){
        //perform validation

        $user = User::create($request->all());


        //....

        $user->save();

        if($user->is_admin==1){
            return 'User created succesfully and He is admin';
        }else{
            return 'User created succesfully.';
        }

    }

    public function update(){
            $user = User::find(1);

            $user->timestamps = false;

            $user->save();
    }

    public function displayGreeting(){
        return GreetingService::getText();
    }
}

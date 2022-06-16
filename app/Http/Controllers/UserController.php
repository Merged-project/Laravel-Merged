<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Festival;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function subscribe($id) {
        $user = User::find(Auth::id());
        $festival = Festival::find($id);

        $user->festival()->attach($festival);
    }

    public function unsubscribe($id) {
        $user = User::find(Auth::id());
        $festival = Festival::find($id);

        $user->festival()->detach($festival);
    }

    //-----MY FESTIVALS-----
    
    public function my_festivals () {
        $myFestivalUser = []; 

        if(Auth::user()){
            $user = Auth::user();
            $myFestivalUser = $user->event;
        };
    }
}

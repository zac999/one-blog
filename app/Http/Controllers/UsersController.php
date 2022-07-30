<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //create
    public function create(){
        return view('users.create');
    }

    //show
    public function show(User $user){
        return view('users.show',compact('user'));
    }
}

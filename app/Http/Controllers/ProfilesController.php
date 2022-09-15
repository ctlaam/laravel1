<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class ProfilesController extends Controller
{
    public function index($user){
      $user = User::find($user);
        return view('home',[
            'user' => $user,
        ]);
    }
}

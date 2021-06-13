<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show ($id) 
    {
      $users = User::find($id);
      return view('profile',['users' => $users]);
    }
}

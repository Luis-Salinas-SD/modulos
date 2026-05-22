<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function indexAdmin()
    {
        return view('profileAdmin');
    }

    public function indexUser()
    {
        return view('profileUser');
    }
}

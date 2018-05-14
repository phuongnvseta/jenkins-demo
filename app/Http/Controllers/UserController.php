<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    
    /**
     * Show information of newest user
     *
     * @return \Illuminate\Http\Response
     */
    public function newest()
    {
        
        return view('users.newest');
    }
}

<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo '<h1> This is an User Area </h1>';
    }

    public function getAllUsers($type, $id)
    {
        echo '<h2>Show all users</h2>';
        // return view('product');
    }

  
}

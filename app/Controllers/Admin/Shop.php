<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo '<h1> This is an Admin Shop Area </h1>';
    }

    public function product($type, $id)
    {
        echo '<h2>This is an admin product: '.$type.' with an id: '.$id.'</h2>';
        // return view('product');
    }

  
}

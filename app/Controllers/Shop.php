<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type = 'laptop', $id = 'dell')
    {
        echo '<h2>This is a product: '.$type.' with an  id: '.$id.' </h2>';
        // return view('product');
    }

}

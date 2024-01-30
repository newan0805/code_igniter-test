<?php

namespace App\Controllers;

use App\Model\BlogModel;

class Blog extends BaseController
{
    public function index()
    {

        $data = [
            //'meta_title' => 'Blog with codeigniter',
            'title' => 'Blog page...',
        ];

        $posts = [ 'Title 1', 'Title 2', 'Title 3'];
        $data[ 'posts' ] = $posts;

        return view('blog', $data);
    }

    public function post()  {

        $data = [
            'meta_title' => 'Blog with codeigniter',
            'title' => 'Awsome page...',
        ];

        return view('single_post', $data);
    }

    public function new() {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create new post',
        ];

        if($this->request->getMethod() == 'post') {
            $model = new BlogModel();
            $model->save($_POST);
        }

        return view('new_post', $data);
    }
}

 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }
    public function create()
    {
        return view('blogs.create');
    }
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required | max:150',
            'description' => 'nullable|max:1200',
            'status' => 'required|in:0,1',
              
        ]);
        $req=request();
        $form_req=$req->all();
        $blog=new Blog();
        $blog->title=$form_req['title'];
        $blog->slug=str_slug($form_req['title']);
        $blog->description=$form_req['description'];
        $blog->meta_title=$form_req['meta_title'];
        $blog->meta_keywords=$form_req['meta_keywords'];
        $blog->	meta_description=$form_req['meta_description'];
        $blog->status=$form_req['status'];
        $status=$blog->save();
        return redirect()->to('blogs');

    }
}

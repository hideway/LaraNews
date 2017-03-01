<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;

class PageController extends Controller
{
    public function index(Request $request, $slug = 'home'){
    	$data = Post::paginate(1);
    	$nav = Page::where('type', 'page')->get();
    	$page = Page::where(['type' => 'page', 'slug' => $slug])->first();

    	if($page){
    		return view('post.index', ['nav' => $nav, 'page' => $page, 'data' => $data]);
    	}
    	return abort(404);
    }
}

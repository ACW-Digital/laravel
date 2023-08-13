<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function show($page_id){
        $page = Page::find($page_id);
        if($page){
            return View('page',compact('page'));
        }
        else{
            return redirect('/');
        }
    }
    public function index(){
        $pages = Page::get()->all();
        return View('main',compact('pages'));
    }
}

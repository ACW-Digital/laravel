<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pages = Page::get()->all();
        return View('main',compact('pages'));
    }
}

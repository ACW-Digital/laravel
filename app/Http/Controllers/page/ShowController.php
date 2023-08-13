<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($page_slug)
    {

        $page = Page::where('slug',$page_slug)->where('status','published')->first();
        if($page){
            $meta = [];
            $meta['meta_description'] = $page->meta_description;
            $meta['meta_description_1'] = $page->meta_description_1;
            $meta['meta_description_2'] = $page->meta_description_2;
            $meta['meta_description_3'] = $page->meta_description_3;
            $meta['meta_description_4'] = $page->meta_description_4;
            return View('page',compact('page','meta'));
        }
        else{
            return redirect('/pages');
        }
    }
}

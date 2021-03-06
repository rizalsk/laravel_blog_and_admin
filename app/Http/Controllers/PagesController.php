<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function show($slug){
        $page = Page::findBySlug($slug);
        return view('theme::page.show')->with('page',$page);
    }
}

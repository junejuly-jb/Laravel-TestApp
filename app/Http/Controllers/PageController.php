<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = "Index";
        return view('pages.index')->with('title', $title);
    }

    public function createPage(){
        return view('pages.create');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\title_new;
class FirstNewController extends Controller
{
    public function index()
    {
        $news = title_new::all();
        return view('news.index',['titleNews'=>$news]);
    }
}

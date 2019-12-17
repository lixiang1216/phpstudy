<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BookController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('CheckAge'); 
    // }

    //注册单个行为控制器的路由时，无需指明方法：
    public function __invoke()
    {
        return '__invoke';
    }

    public function index(Request $request)
    {
        $website = 'lxv5.com';
        $name = '<span style="color:red">www</span>';
        return view('book/index',compact('website','name'));
    }

    //
    public function book(Request $request)
    {
        return view('book.book');
    }
}

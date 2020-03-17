<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 11:46:27
 * @LastEditTime : 2020-01-17 14:16:23
 * @Description: file content
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\storeBlogPost;
use Illuminate\Support\Facades\Auth;
/*
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method    | URI                    | Name             | Action                                                                 | Middleware   |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD  | posts                  | posts.index      | App\Http\Controllers\PostController@index                              | web          |
|        | POST      | posts                  | posts.store      | App\Http\Controllers\PostController@store                              | web          |
|        | GET|HEAD  | posts/create           | posts.create     | App\Http\Controllers\PostController@create                             | web          |
|        | GET|HEAD  | posts/{post}           | posts.show       | App\Http\Controllers\PostController@show                               | web          |
|        | PUT|PATCH | posts/{post}           | posts.update     | App\Http\Controllers\PostController@update                             | web          |
|        | DELETE    | posts/{post}           | posts.destroy    | App\Http\Controllers\PostController@destroy                            | web          |
|        | GET|HEAD  | posts/{post}/edit      | posts.edit       | App\Http\Controllers\PostController@edit                               | web          |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
*/
class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('published_at','<',now())->orderBy('id', 'desc')->paginate(10);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type= 'create';
        return view('posts.create',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeBlogPost $request)
    {
        //
        $input = $request->all();
        //dd(Auth::user());
        $input['author_id'] = Auth::id();
        Post::create($input);
        return redirect('posts');
        #dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function show($id)
    {
        $post = Post::findOrFail($id);
        #dd($post->user->toarray());
        return view('posts.show',compact('post'));
    }
    */
    //路由- 隐式绑定
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $type= 'edit';
        // var_dump($post->published_at);
        // dd($post->published_at->toDateString());
        return view('posts.create',compact('post','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeBlogPost $request, Post $post)
    {
        //
        $input = $request->all();
        // $post = Post::find($id);
        // $post->update($input);
        $post->update($input);
        return redirect('posts/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        #$post::destroy($post->id);
        $post->delete();
        return redirect('posts');
    }
}

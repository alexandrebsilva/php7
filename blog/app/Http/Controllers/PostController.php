<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle ="Home";
        $posts = Post::all();

        /*return response()->json(
          $posts
        );*/

        return view('posts/index', compact("posts", "pageTitle"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle ="Create post";
        return view('posts/create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $title = $request->title;
      $content = $request->content;
      $category_id = 1;
      $post = Post::create([
        "title"=>$title,
        "content"=>$content,
        "category_id"=>$category_id,
      ]);

      return redirect()->action(
        'PostController@index'
      );
      /*DB::insert('insert into posts (title, content, category_id) values (?, ?, ?)', [$title, $content, $category_id]);
      return redirect()->action(
        'PostController@index'
      );*/

        /*[
          //$request->all(),
          //$request->title,
          //$request->content,

      ];*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        $pageTitle ="Post";
        $post = Post::where('id', $id)->first();
        //dd($post = Post::where('id',$id)->first());
        return view('posts/show',compact("pageTitle","post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $pageTitle ="Edit";
        $post = Post::where('id',$id)->first();
        return view('posts/edit', compact("pageTitle","id","post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, $id)
    {
        Post::where('id', $id)->update([
          'title'=>$request->title,
          'content'=>$request->content,
          'category_id'=>1
      ]);
        return 'update page';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        Post::destroy($id);
        return 'destroy page';
    }
}

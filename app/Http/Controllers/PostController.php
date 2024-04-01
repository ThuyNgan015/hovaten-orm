<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index(){
        echo '<h2>Query Eloquent Model</h2>';

        // $allPosts = Post::all();

        // if ($allPosts->count()>0) {
        //     foreach ($allPosts as $item) {
        //         echo $item->title.'<br/>';
        //     }
        // }

        // $detail = Post::find(1);
        
        // dd($detail);

        //Sử dụng query build
        // $activePosts = DB::table('posts')->where('status',  1)->get();

        // $activePosts = Post::where('status',  1)->oderBy('id', 'DESC')->get();
        
        // if ($activePosts->count()>0) {
        //     foreach ($activePosts as $item) {
        //         echo $item->title.'<br/>';
        //     }
        // }

        // $allPosts = Post::all();
        // $activePosts = $allPosts->reject(function ($post) {
        //     //dd($post);
        //     return $post->status==0; //boolean
        // });
        // dd($activePosts);

        // Post::chunk(200, function ($posts) {
        //     foreach ($posts as $post) {
        //         echo $post->title."<br>";
        //     }

        //     echo 'Kết thúc chunk <br/>';
        // });

        $allPosts = Post::cursor();

        foreach ($allPosts as $item) {
                echo $item->title."<br/>";
            }
    }
}
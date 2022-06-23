<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //    function to show the view page

    public function show($slug)
    {
//        $post = \DB::table('posts')-where('slug', $slug)->first();

       // dd($post);
        //$post = \DB::table('posts')-where('slug', $slug)-first();


        return (view ('post', [
            $post = Post::where('slug', $slug)->firstOrFail()
        ]));

        if(! $post) {
            abort(404);
        }
    }
    public function index()
    {
        return view('......', ['articles' => Article::all(),]);
    }
}

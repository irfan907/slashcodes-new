<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
// use \TCG\Voyager\Models;
// use \TCG\Voyager\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $posts = Post::with('author')->where("status", '=', 'PUBLISHED')->latest()->paginate(12);

        $featured = Post::with('author')->where("featured", '=', 1)->where("status", '=', 'PUBLISHED')->first();
        $editor = Post::with('author')->where("editor_pick", '=', 1)->where("status", '=', 'PUBLISHED')->latest()->take(4)->get();

        $posts->setPath(env('APP_URL') . 'blog');
        $categories = DB::table('categories')->whereNull('parent_id')->get();
        // dd($editor);
        return view('posts.index', array('blog_news' => $posts, 'categories' => $categories, 'action' => 'home', 'editor' => $editor, 'featured' => $featured, 'actioncategory' => ''));
    }

    public function newsindex(Request $request)
    {
        // $posts =  Category::where('slug',$slug)->with('posts','posts.author')->first();
        $posts = Category::where('slug', "news")->with(['posts' => function ($query) {
            $query->where('status', '=', 'PUBLISHED');
        }])->first();
        if ($posts) {
            $categories = Category::where('parent_id', $posts->id)->get();
            return view('posts.index', array('blog' => $posts, 'categories' => $categories, 'action' => 'tag', 'actioncategory' => 'news'));
        } else {
            return view('errors.404');
        }

    }
    public function pressindex(Request $request)
    {
        // $posts =  Category::where('slug',$slug)->with('posts','posts.author')->first();
        $posts = Category::where('slug', "press-release")->with(['posts' => function ($query) {
            $query->where('status', '=', 'PUBLISHED');
        }])->first();
        if ($posts) {
            $categories = Category::where('parent_id', $posts->id)->get();
            return view('posts.index', array('blog' => $posts, 'categories' => $categories, 'action' => 'tag', 'actioncategory' => 'press-release'));
        } else {
            return view('errors.404');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, $slug)
    {

        $post = Post::with('author')->where("slug", '=', $slug)->where("status", '=', 'PUBLISHED')->first();

        $similar = Post::with('author')->where("slug", "!=", $slug)
            ->orderBy('created_at', 'desc')->take(3)->get();

        if ($post) {
            return view('posts.show', compact('post', 'similar'));
        } else {
            abort(404);
        }
    }
    public function showpress(Request $request, $slug)
    {

        $posts = Category::where('slug', "press-release")->with(['posts' => function ($query) use ($slug) {
            $query->where('status', '=', 'PUBLISHED');
            $query->where("slug", '=', $slug);
        }])->first();

        $similar = Post::with('author')->where("slug", "!=", $slug)
            ->orderBy('created_at', 'desc')->take(3)->get();

        if ($posts->posts->count() > 0) {
            $post = $posts->posts[0];
            return view('posts.show', compact('post', 'similar'));
        } else {
            return view('errors.404');
        }

    }
    public function shownews(Request $request, $slug)
    {

        $posts = Category::where('slug', "news")->with(['posts' => function ($query) use ($slug) {
            $query->where('status', '=', 'PUBLISHED');
            $query->where("slug", '=', $slug);
        }])->first();

        $similar = Post::with('author')->where("slug", "!=", $slug)
            ->orderBy('created_at', 'desc')->take(3)->get();

        if ($posts->posts->count() > 0) {
            $post = $posts->posts[0];
            return view('posts.show', compact('post', 'similar'));
        } else {
            return view('errors.404');
        }
    }
    public function tag(Request $request, $slug)
    {
        // $posts =  Category::where('slug',$slug)->with('posts','posts.author')->first();
        $posts = Category::where('slug', $slug)->with(['posts' => function ($query) {
            $query->where('status', '=', 'PUBLISHED');
        }])->first();

        if ($posts) {
            $categories = Category::where('parent_id', $posts->id)->get();
            return view('posts.index', array('blog' => $posts, 'categories' => $categories, 'action' => 'tag', 'actioncategory' => 'tag'));
        } else {
            return view('errors.404');
        }

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

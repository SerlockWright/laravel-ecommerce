<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function home()
    {
        // $blogs = [
        //     [
        //         'title' => 'Blog 1',
        //         'content' => 'This is blog 1 content',
        //         'status' => 0
        //     ],
        //     [
        //         'title' => 'Blog 2',
        //         'content' => 'This is blog 2 content',
        //         'status' => 1
        //     ],
        //     [
        //         'title' => 'Blog 3',
        //         'content' => 'This is blog 3 content',
        //         'status' => 1
        //     ],
        //     [
        //         'title' => 'Blog 4',
        //         'content' => 'This is blog 4 content',
        //         'status' => 0
        //     ]
        // ];
        //return view('home', compact('blogs'));
        /************************ Query DB  ***************************/
        /* Retrive data from database */
        //return DB::table('posts')->first();

        /* Retrive data from database list column value */
        //return DB::table('posts')->pluck('title', 'id');

        /* Retrive data from database with where clause*/
        //return DB::table('posts')->where('status', 1)->get();

        /* Insert data into database */
        // DB::table('posts')->insert([
        //     'title' => 'Blog 5',
        //     'description' => 'This is blog 5 content',
        //     'status' => 1,
        //     'publish' => date('Y-m-d'),
        //     'user_id' => 1
        // ]);
        // dd('success');

        /* Update data into database */
        // DB::table('posts')->where('id', 1)->update([
        //     'title' => 'Blog 1',
        //     'description' => 'This is blog 1 content',
        // ]);
        // dd('success');

        /* Delete data into database */
        // DB::table('posts')->where('id', 22)->delete();
        // dd('success');

        /* Join data from two table */
        // return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
        //     ->select('categories.*')->get();

        /*Aggregate 
            min(), max(), avg(), sum()
        */

        /**************************** ELOQUENT ORM ********************************/

        //1. Get all data
        // $posts = Post::all();
        // foreach ($posts as $post) {
        //     echo $post->title . '<br>';
        // }

        //2. Get data with where clause
        //return Post::where('views', '>', 200)->where('id', 2)->get();
        //return Post::where('views', '>', 400)->orWhere('id', 2)->get();

        //3. Insert data
        // $post = new Post();

        // $post->title = 'Blog 6';
        // $post->description = 'This is blog 6 content';
        // $post->status = 1;
        // $post->publish = date('Y-m-d');
        // $post->user_id = 1;
        // $post->views = 100;

        // $post->save();

        //4. Update data
        // $post = Post::where('id', 5)->first();
        // $post->title = 'Blog 5';
        // $post->save();

        // dd('success');

        //5. Delete data
        // Post::where('id', 2)->delete();
        // dd('success');


        /************** Mass Assignment ******************/
        // $post = Post::create([
        //     'title' => 'Blog 6',
        //     'description' => 'This is blog 6 content',
        //     'status' => 1,
        //     'publish' => date('Y-m-d'),
        //     'user_id' => 2,
        //     'views' => 100
        // ]);
        // $post = Post::where('user_id', 2)->update([
        //     'title' => 'Blog 7',
        // ]);

        //Soft delete
        //$post = Post::where('id', 4)->delete();
        // dd('success');
        // return Post::all();

        //Retrive data from deleted data
        //return Post::onlyTrashed()->get();

        //restore data from trash
        // Post::withTrashed()->find(3)->restore();

        //delete data from trash permanently
        //Post::withTrashed()->find(4)->forceDelete();
    }
}

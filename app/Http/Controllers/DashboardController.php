<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('Dashboard');
    }

    public function createPost(Request $request)
    {
        $post = new Posts();
        /*
         * $table->text('post');
            $table->integer('user_id',false,true);
            $table->integer('contest_id',false,true)->nullable();
            $table->enum('share_with',array('contest','followers','fans','audience'))->default('followers');*/
        $post->post = $request['post'];
        $post->contest_id = $request['contest_id']==isEmptyOrNullString() ? 0 : intval($request['contest_id']);
        $post->share_with = $request['share_with'];

        $request->user()->posts()->save($post);

        return back();
    }
}

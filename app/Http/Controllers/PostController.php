<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Directory;
// use Directory;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function stor(Request $request)
    {
        $post = new Post();
        $post->fname = $request->fname;
        $post->lname = $request->lname;
        $post->save();
        // Post::create([ anther way to push date
        //     'fname' => $request->fname,
        //     'lname' => $request->lname
        // ]);
        return response("done");
    }

    public function insert()
    {
        $posts = Post::all();
        return view('insert-fromDB', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::findorFail($id);
        //  return $post;
        //$post=Post::where('id',$id)->frist();
        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findorFail($id);
        // $post->update([ anther way for update
        //     'fname' => $request->fname,
        //    'lname' => $request->lname
        // ]);
        $post->fname = $request->fname;
        $post->lname = $request->lname;
        $post->save();
        return redirect(route('postsinsert'));
    }

    // delered post
    public function delete($id)
    {
        Post::findorFail($id)->delete();
        return redirect(route('postsinsert'));
    }

    //   to  show  all date that you deleted from foft deleted
    public function showdeleted(){
        $posts=Post::onlyTrashed()->get();
        return view('softdelete',compact('posts'));
    }

 //   to  return  all date that you deleted from foft deleted
    public function restore($id){
         Post::withTrashed()->where('id',$id)->restore();
        return  redirect()->back();
    }


    //   to  DELETE  date from DB without soft delete
    public function forcedelete($id){
        Post::withTrashed()->where('id',$id)->forceDelete();
       return  redirect()->back();
   }
}

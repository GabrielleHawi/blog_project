<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\followers;
use App\Models\Posts;
use Illuminate\Support\Facades\Session;

class NewController extends Controller
{
    //
    public function index(Request $request){
    
       $counter = followers::firstOrNew(['count' => 1]);
       $counter->count++;
       $counter->save();

        Session::flash('message','You have succefully followed Gabby');
        return redirect()->back();
    }

    public function followers()
{
    $follow = followers::count();

    return view('welcome', ['follow' => $follow]);
}
public function post_blog(Request $request){
    
    $validated = $request->validate([
        'title' => 'required|max:255',
        'textarea' => 'required',
    ]);

    Posts::create($validated);

    Session::flash('message','You have succefully add a blog');
     return redirect()->back();
}

public function post_blogall(){
 
    $posts = Posts::get();

    return view('welcome', ['posts' => $posts]);
}
public function delete($id) {

    $posts = Posts::findOrFail($id);

    $posts->delete();
    Session::flash('message','You have succefully add a blog');
    return redirect()->back();
}
}

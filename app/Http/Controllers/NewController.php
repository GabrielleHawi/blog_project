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

    #function for addition of follower when button is clicked
    public function index(Request $request){
    
       $counter = followers::firstOrNew(['count' => 1]);
       $counter->count++;
       $counter->save();

        Session::flash('message','You have succefully followed Gabby');
        return redirect()->back();
    }

    #function to get the total number of followers 
    public function followers()
{
    $follow = followers::count();

    return view('welcome', ['follow' => $follow]);
}
    #end 
public function post_blog(Request $request){
    
   #function to validate the items from the blog form 
    $validated = $request->validate([
        'title' => 'required|max:255',
        'textarea' => 'required',
    ]);
   #end of the validation function:

    #post function after the validated parameters are met
    Posts::create($validated);
    #end of post function 
    #session message
    Session::flash('message','You have succefully add a blog');
    #end of session message
     return redirect()->back(); #redirect back to view page after posting 
}

#function to get all the 
public function post_blogall(){
 
    #get all records under post table (array)
    #to display in welcome view you will use foreach 
    $posts = Posts::get();
    #end 

    return view('welcome', ['posts' => $posts]);
}
public function delete($id) {
    #this function is based on the id of the specifc item one wants to delete from the database
    #if($id is empty ){
     # the id is not available
   # }else
    $posts = Posts::findOrFail($id);
     
    $posts->delete();
    Session::flash('message','You have succefully add a blog');
    return redirect()->back();
}
}

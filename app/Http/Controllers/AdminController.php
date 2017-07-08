<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/6/2017
 * Time: 8:58 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\ContactMessage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getIndex(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $contact_messages = ContactMessage::orderBy('created_at', 'desc')->take(3)->get();
        return view('admin.index', ['posts' => $posts, 'contact_messages' => $contact_messages]);
    }
    public  function getLogin(){
        return view('admin.login');
    }
    public  function postLogin(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(!Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->back()->with(['fail'=>'Could not log you in!']);
        }

        return redirect()->route('admin.index');
    }
    public  function getLogout(){
        Auth::logout();
        return redirect()->route('blog.index');
    }
}
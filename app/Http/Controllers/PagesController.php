<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Category;
use App\Event;
use App\Comment;
use App\Mail\VisitorContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index(){

        //$categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
        //$posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(3);
        //$events = Event::orderBy('id', 'DESC')->where('event_type', 'event')->where('is_published', '1')->paginate(2);
        return view('pages.index', compact('posts','categories', 'events'));
        
    }

    public function post($slug)
    {  
        $posts = Post::orderBy('id', 'DESC');
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
        $latestposts = Post::orderBy('id', 'DESC')->take(5)->get();

        if ($post) {
            return view('pages.post', compact('post','posts','latestposts'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }  

    public function event($slug)
    {
        $events = Event::orderBy('id', 'DESC');
        $event = Event::where('slug', $slug)->where('event_type', 'event')->where('is_published', '1')->first();

        if ($event) {
            return view('pages.eventpost', compact('event', 'events'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('is_published', '1')->first();
        if ($category) {
            $posts = $category->posts()->orderBy('posts.id', 'DESC')->where('is_published', '1')->paginate(5);
            return view('pages.category', compact('category', 'posts'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
    

    public function search()
    { 
        $search_text = $_GET['q'];
        $posts = Post::where('title', 'LIKE', '%' .$search_text. '%')->with('categories')->get();
        
        if (!$posts || !$posts->count()) {
            Session::flash('no-results', 'No search results found');
        }
        return view('pages.search', compact('posts'));
        } 
    
       
    public function about(){

        return view('pages.about');
    }
    
    public function blog(){

        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(10);
        return view('pages.blog', compact('posts'));
    }

    public function events(){
       
        $events = Event::orderBy('id', 'DESC')->where('event_type', 'event')->where('is_published', '1')->paginate(10);
        return view('pages.events', compact('events'));
    }

    public function sermons(){
       
        return view('pages.event');
    }
   
    public function showContactForm()
    {
        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('mwengibrian@gmail.com')->send(new VisitorContact($data));

        Session::flash('message', 'Thank you for your email');
        return redirect()->route('contact.show');
  }
}

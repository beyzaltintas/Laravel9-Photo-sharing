<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $sliderdata=Photo::limit(4)->get();
        $photolist1=Category::limit(9)->get();
        $setting= Setting::first();

        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'photolist1'=>$photolist1
        ]);
    }

    public function about() {

        $setting= Setting::first();

        return view('home.about',[
            'setting'=>$setting,
        ]);
    }

    public function references() {

        $setting= Setting::first();

        return view('home.references',[
            'setting'=>$setting,
        ]);
    }

    public function contact() {

        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting
        ]);
    }

    public function faq() {

        $setting= Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request) {

       // dd($request);
        $data= new Message();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->phone= $request->input('phone');
        $data->subject= $request->input('subject');
        $data->message= $request->input('message');
        $data->ip= request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank You.');
    }

    public function storecomment(Request $request) {

        // dd($request);
        $data= new Comment();
        $data->user_id=Auth::id();
        $data->photo_id= $request->input('photo_id');
        $data->subject= $request->input('subject');
        $data->review= $request->input('review');
        $data->rate= $request->input('rate');
        $data->ip= request()->ip();
        $data->save();

        return redirect()->route('photo',['id'=>$request->input('photo_id')])->with('success','Your comment has been sent, Thank You.');
    }

    public function photo($id) {

        $data=Photo::find($id);
        $images = DB::table('images')->where('photo_id',$id)->get();
        $reviews=Comment::where('photo_id',$id)->get();
        return view('home.photo',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
        ]);
    }

    public function gallery($gid) {

        $data=Category::find($gid);
        $gallerydata=Photo::find($gid);
        $photos = DB::table('photos')->where('category_id',$gid)->get();
        return view('home.gallery',[
            'gallerydata'=>$gallerydata,
            'photos'=>$photos,
            'data'=>$data

        ]);
    }

    public function test() {

        return view('home.test');
    }

    public function param($id,$number) {

        //echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
       // echo "<br>Sum Parameters :", $number + $id;
        return view('home.test2' ,
        [
        'id' => $id ,
        //'number' => $number
       ]);
    }

    public function save(Request $request) {

        echo "Save Function<br>";
        echo "First Name:", $_REQUEST["fname"];
        echo "Last Name:", $_REQUEST["lname"];

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $sliderdata=Photo::limit(4)->get();
        $photolist1=Category::limit(7)->get();
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
            'setting'=>$setting,
        ]);
    }

    public function photo($id) {

        $data=Photo::find($id);
        $images = DB::table('images')->where('photo_id',$id)->get();
        return view('home.photo',[
            'data'=>$data,
            'images'=>$images
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

}

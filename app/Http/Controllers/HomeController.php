<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $sliderdata=Photo::limit(4)->get();
        $photolist1=Photo::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'photolist1'=>$photolist1
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

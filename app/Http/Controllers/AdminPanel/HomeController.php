<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function setting()
    {
        $data= Setting::first();
        if($data==null) // If setting table empty add one record
        {
            $data= new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data= Setting::first();
        }
        return view("admin.setting",['data' => $data]);
    }

    public function settingUpdate(Request $request)
    {
        echo "Save";
    }

}

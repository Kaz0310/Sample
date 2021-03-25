<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ScheduleController extends Controller
{

    public function about() {
        $user_data = DB::table('schedule')->where('user_id', 1)->get();
        return view('about',['data' => $user_data]);
    }

    public function arrive(){

        DB::table('schedule')->where('user_id', 1)
        ->update(["arrive" => 1]);
        return redirect()->back();
        // return view('about');
    }

    public function leave(){
        DB::table('schedule')->where('user_id', 1)
        ->update(["arrive" => 0]);
        return redirect()->back();
        // return view('about');
    }
}
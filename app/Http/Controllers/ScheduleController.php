<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ScheduleController extends Controller
{
    public function arrive(){

        DB::table('schedule')->where(["user_id" => 1])
        ->insert(["arrive" => 1]);
        return view('about');
    }

    public function leave(){
        DB::table('schedule')->where(["user_id" => 1])
        ->insert(["arrive" => 0]);
        return view('about');
    }
}
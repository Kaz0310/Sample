<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ScheduleController extends Controller
{
    public function arrive(){
        return view('about');
    }

    public function leave($id){
        return view('about');
    }
}
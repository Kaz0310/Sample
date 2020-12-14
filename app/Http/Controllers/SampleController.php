<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class SampleController extends Controller
{
    public function index(){
        // return view('sample');
        $user_data = DB::table('user')
        ->get(['user_id','user_name','user_age']);
        return view('sample',['data' => $user_data]);
    }

    public function show($id){
        // return view('sample');
        $user_data = DB::table('user')->where('user_id', $id)
        ->get(['user_id','user_name','skill1','skill2','skill3']);
        return view('skill',['data' => $user_data]);
    }
}

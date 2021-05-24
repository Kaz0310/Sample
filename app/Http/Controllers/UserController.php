<?php

namespace App\Http\Controllers;

use DB;
use Request;

class UserController extends Controller
{
    public function index()
    {
      $user_data = DB::table('employee')
      ->get(['number','name']);
      return view('user.index',['data' => $user_data]);
    }
    public function create()
    {

        return view('user.create');
    }

    public function form(Request $employee)
    {
        $data1 = $employee::all();
        // 投稿内容の受け取って変数に入れる
        $number = $data1['number'];
        $name = $data1['name'];
        $furigana = $data1['furigana'];
        $birthday = $data1['birthday'];
        $sex = $data1['sex'];
        $age = $data1['age'];

        $address = $data1['address'];
        $address_furi = $data1['address_furi'];
        $near_station = $data1['near_station'];
        $phone = $data1['phone'];
        $mail = $data1['mail'];

        $nengetu = $data1['nengetu'];
        $gakureki = $data1['gakureki'];

        $nengetu1 = $data1['nengetu1'];
        if(!$nengetu1){
          $nengetu1 = '';
        }
        $shikaku1 = $data1['shikaku1'];
        if(!$shikaku1){
          $shikaku1 = '';
        }
        $nengetu2 = $data1['nengetu2'];
        if(!$nengetu2){
          $nengetu2 = '';
        }
        $shikaku2 = $data1['shikaku2'];
        if(!$shikaku2){
          $shikaku2 = '';
        }
        $nengetu3 = $data1['nengetu3'];
        if(!$nengetu3){
          $nengetu3 = '';
        }
        $shikaku3 = $data1['shikaku3'];
        if(!$shikaku3){
          $shikaku3 = '';
        }

        $specialty = $data1['specialty'];
        if(!$specialty){
          $specialty = '';
        }
        $message = $data1['message'];
        if(!$message){
          $message = '';
        }

        DB::table('employee')
        ->insert(["number" => $number, "name" => $name, "furigana" => $furigana, "birthday" => $birthday, "sex" => $sex, "age" => $age,
        "address" => $address, "address_furi" => $address_furi, "near_station" => $near_station, "near_station" => $near_station, "phone" => $phone, "mail" => $mail,
        "nengetu" => $nengetu, "gakureki" => $gakureki, "nengetu1" => $nengetu1, "shikaku1" => $shikaku1, "nengetu2" => $nengetu2, "shikaku2" => $shikaku2, "nengetu3" => $nengetu3, "shikaku3" => $shikaku3,
        "specialty" => $specialty, "message" => $message]);
        return view('user.form',compact('data1'));
    }

    public function show(Request $request)
    {
        $data1 = $request::all();
        $user_data = DB::table('employee')->where('number', $data1['number'])->get();
        $career_data = DB::table('career')->where('number', $data1['number'])->get();
        return view('user.show',['data' => $user_data],['career' => $career_data]);
    }

    public function job(Request $request)
    {
      $data1 = $request::all();
      $user_data = DB::table('employee')->where('number', $data1['number'])->get();
      $career_data = DB::table('career')->where('number', $data1['number'])->get();
      return view('user.job',['data' => $user_data],['career' => $career_data]);
    }

    public function career(Request $request)
    {
        $data1 = $request::all();
        return view('user.career',compact('data1'));
    }

    public function entry(Request $request)
    {
        $data1 = $request::all();
        DB::table('career')
        ->insert(["number" => $data1['number'], "detail" => $data1['detail']]);
        return view('user.entry',compact('data1'));
    }
}

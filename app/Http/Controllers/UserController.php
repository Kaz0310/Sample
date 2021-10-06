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
        $user_data = DB::table('employee')->select('number','name','furigana')->where('number', $data1['number'])->first();
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
        $number = $data1['number'];
        

        $start = $data1['start'];;
        if(!$start){
          $start = '2019/01';
        }

        $end = $data1['end'];;
        if(!$end){
          $end = '2019/02';
        }

        $matter = $data1['matter'];;
        if(!$matter){
          $matter = '案件';
        }

        $detail = $data1['detail'];
        if(!$detail){
          $detail = '経歴サンプル';
        }

        $type = $data1['type'];;
        if(!$type){
          $type = '開発系';
        }

        $manpower = $data1['manpower'];;
        if(!$manpower){
          $manpower = 1;
        }

        $persons = $data1['persons'];;
        if(!$persons){
          $persons = 1;
        }

        $role = $data1['role'];;
        if(!$role){
          $role = 'リーダー';
        }

        $process = $data1['process'];
        if(!$process){
          $process = "ソフトウェア設計\nソフトウェア作成\nシステムテスト\n運用テスト\n運用・保守";
        }

        $tools = $data1['tools'];
        if(!$tools){
          $tools = "OS\n- WindowsOS\nプログラミング言語\n- C#\n- SQL";
        }
        
        DB::table('career')
        ->insert(["number" => $number, "start" => $start, "end" => $end, "matter" => $matter,
         "detail" => $detail, "type" => $type, "manpower" => $manpower, "persons" => $persons,
         "role" => $role, "process" => $process, "tools" => $tools]);
        return view('user.entry',compact('data1'));
    }

    public function exp(Request $request)
    {
      $data1 = $request::all();
      $user_data = DB::table('employee')->select('number','name','furigana')->where('number', $data1['number'])->first();
      //$industry_data = DB::table('industry')->leftJoin('experience', 'code', '=', 'experience.industry_code')->where('number', $data1['number'])->orWhereNull('number')->orderBy('code', 'asc')->get();
      $subSQL = DB::table('experience')->where('number', '=', ':number')->toSQL();
      $industry_data = DB::table('industry')->leftJoinSub($subSQL, 'exp', 'code', 'exp.industry_code')->orderBy('code', 'asc')->setBindings([':number'=>$data1['number']])->get();

      $subSQL = DB::table('work_experience')->where('number', '=', ':number')->toSQL();
      $occupation_data = DB::table('occupation')->leftJoinSub($subSQL, 'work', 'code', 'work.occupation_code')->orderBy('code', 'asc')->setBindings([':number'=>$data1['number']])->get();
      return view('user.exp',['data' => $user_data,'industry' => $industry_data,'occupation' => $occupation_data]);
    }

    public function skill(Request $request)
    {
      $data1 = $request::all();
      $user_data = DB::table('employee')->select('number','name','furigana')->where('number', $data1['number'])->first();

      $subSQL = DB::table('business_experience')->where('number', '=', ':number')->toSQL();
      $business_data = DB::table('business')->Join('business_class','code','=','business_code')->leftJoinSub($subSQL, 'exp', function ($join) {
        $join->on('business_class.business_code', '=', 'exp.experience_code');
        $join->on('business_class.business_class_code', '=', 'exp.experience_class_code');
      })->orderBy('business_class.business_code', 'asc')->orderBy('business_class.business_class_code', 'asc')->setBindings([':number'=>$data1['number']])->get();

      $subSQL = DB::table('technology_experience')->where('number', '=', ':number')->toSQL();
      $technology_data = DB::table('technology')->Join('technology_class','code','=','technology_code')->leftJoinSub($subSQL, 'exp', function ($join) {
        $join->on('technology_class.technology_code', '=', 'exp.experience_code');
        $join->on('technology_class.technology_class_code', '=', 'exp.experience_class_code');
      })->orderBy('technology_class.technology_code', 'asc')->orderBy('technology_class.technology_class_code', 'asc')->setBindings([':number'=>$data1['number']])->get();

      return view('user.skill',['data' => $user_data, 'business' => $business_data, 'technology' => $technology_data]);
    }

    public function search(Request $request)
    {
      $data1 = $request::all();

      //$subSQL = DB::table('business_experience')->where('number', '=', ':number')->toSQL();
      $business_data = DB::table('business')->Join('business_class','code','=','business_code')->orderBy('business_class.business_code', 'asc')->orderBy('business_class.business_class_code', 'asc')->get();

      //$subSQL = DB::table('technology_experience')->where('number', '=', ':number')->toSQL();
      $technology_data = DB::table('technology')->Join('technology_class','code','=','technology_code')->orderBy('technology_class.technology_code', 'asc')->orderBy('technology_class.technology_class_code', 'asc')->get();

      return view('user.search',['business' => $business_data, 'technology' => $technology_data]);
    }

    public function result(Request $request)
    {
      $data1 = $request::except(['_token','search']);

      $data1 = array_chunk($data1, 3, true);

      //$subSQL = DB::table('business_experience')->where('number', '=', ':number')->toSQL();
      $business_data = DB::table('business')->Join('business_class','code','=','business_code')->orderBy('business_class.business_code', 'asc')->orderBy('business_class.business_class_code', 'asc')->get();

      //$subSQL = DB::table('technology_experience')->where('number', '=', ':number')->toSQL();
      $technology_data = DB::table('technology')->Join('technology_class','code','=','technology_code')->orderBy('technology_class.technology_code', 'asc')->orderBy('technology_class.technology_class_code', 'asc')->get();

      $business_arr = array();
      $technology_arr = array();


      for($i = 0; $i < count($business_data); $i++){
        $keys= array_keys($data1[$i]);
        foreach ( $keys as $key ) {
          if ( preg_match( '/business_level_*/', $key ) ) {
            if(intval($data1[$i][$key]) > 0){
              array_push($business_arr, $data1[$i]);
            }
          }
        }
        
      }
      for($j = count($business_data); $j < count($data1); $j++){
        array_push($technology_arr, $data1[$j]);
      }

      $mainSQL = DB::table('employee')->select('number','name','age');

      $subSQL = DB::table('business_experience')->where('experience_code', '=', 'experience_code')->where('experience_class_code', '=', 'experience_class_code')->where('level', '>=', 'level')->toSQL();

      $mainSQL = $mainSQL->JoinSub($subSQL, 'bus', 'number', 'bus.employee_id');

      $subSQL = DB::table('business_experience')->where('experience_code', '=', 'experience_code_2')->where('experience_class_code', '=', 'experience_class_code_2')->where('level', '>=', 'level_2')->toSQL();

      $mainSQL = $mainSQL->JoinSub($subSQL, 'bus_2', 'number', 'bus_2.employee_id');

      $bindings = ['experience_code'=>1, 'experience_class_code'=>7, 'level'=>3, 'experience_code_2'=>2, 'experience_class_code_2'=>3, 'level_2'=>1];
      
      $mainSQL = $mainSQL->setBindings($bindings);

      $user_data = $mainSQL->get();

      return view('user.search',['data' => $data1, 'business_arr' => $business_arr, 'technology_arr' => $technology_arr, 'user' => $user_data, 'business' => $business_data, 'technology' => $technology_data]);
    }
}

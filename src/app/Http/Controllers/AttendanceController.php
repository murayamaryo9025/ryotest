<?php

namespace App\Http\Controllers;
use Illumiate\Http\Requests;

class AttendanceController extends Controller{
    public function store(Request $Request)
    {
        $user_id = $request->input('user_id');
        $work_start_time = $request->input('work_start_time');
        'attendance'::create(
            'user_id' ->$user_id,['work_start_time'=>$work_start_time,]);
        //保存後　一覧ページへリダイレクト
        return redirect('/')

      public function update(Request $Request)
        {
            $user_id = $request->input('user_id');
            $work_end_time = $request->input('work_end_time');
            'attendance'::where('user_id',$user_id)->update(['work_end_time' => $work_end_time]);
        //保存後　一覧ページへリダイレクト
            return redirect('/')
        }
    };
};      
    
    


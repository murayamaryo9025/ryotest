<?php
    $start_time = '08:12:34';      //8時12分34秒を代入
    $end_time   = date('H:m:s');   //現在時刻(時分秒)を代入
    print '出勤時間:'.$start_time; //$start_timeの中身を表示
    print '<br>';                  //改行して・・・
    print '退勤時間:'.$end_time;   //$end_timeの中身を表示
    
    $work_time_sec = strtotime($end_time)-strtotime($start_time);              //退勤時間から開始時間を引いて、勤務時間(秒)を求める
    $work_time_hour = floor($work_time_sec/3600);                              //勤務時間(秒)を3600で割ると、時間を求め、小数点を切り捨てる
    $work_time_min  = floor(($work_time_sec-($work_time_hour*3600))/60);       //勤務時間(秒)から時間を引いた余りを60で割ると、分を求め、小数点を切り捨てる
    $work_time_s    = $work_time_sec-($work_time_hour*3600+$work_time_min*60); //勤務時間(秒)から時間を引いた余りを60で割ると、分を求め、小数点を切り捨てる
    
    print '<br>';                          //改行して・・・
    print '勤務時間:'.$work_time_hour.':'; //時 表示
    print             $work_time_min. ':'; //分 表示
    print             $work_time_s       ; //秒 表示
?>
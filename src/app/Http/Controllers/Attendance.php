<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Attendance.php extends Controller{
    use ;

    protected $fillable = [
        'user_id',
        'workday',
        'work_start_time',
        'work_end_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)
    }
}
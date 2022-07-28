<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rests()
    {
        return $this->hasMany(Rest::class);
    }

    public function sumRests()
    {
        $rests = $this->rests;
        
        $sumRests = 0;
        foreach($rests as $rest){
            $start_time = $rest->start_time;
            $end_time = $rest->end_time;

            $start_sec = $this->timeToSec($start_time);
            $end_sec = $this->timeToSec($end_time);

            $diff = $end_sec - $start_sec;
            $sumRests = $sumRests + $diff;
        }

        return $this->secToTime($sumRests);
    }

    public function sumAttendances()
    {
        $start_time = $this->start_time;
        $end_time = $this->end_time;

        $start_sec = $this->timeToSec($start_time);
        $end_sec = $this->timeToSec($end_time);

        $diff = $end_sec - $start_sec;
        $sumAttendances = $diff - $this->timeToSec($this->sumRests());

        return $this->secToTime($sumAttendances);
    }

    public function timeToSec($time)
    {
        $t = explode(":", $time); //配列（$t[0]（時）、$t[1]（分）、$t[2]（秒））にする
        $h = (int)$t[0];
        if (isset($t[1])) { //分の部分に値が入っているか確認
            $m = (int)$t[1];
        } else {
            $m = 0;
        }
        if (isset($t[2])) { //秒の部分に値が入っているか確認
            $s = (int)$t[2];
        } else {
            $s = 0;
        }
        return ($h * 60 * 60) + ($m * 60) + $s;
    }

    public function secToTime($sec)
    {
        $hours = floor($sec / 3600); //時間
        $minutes = floor(($sec / 60) % 60); //分
        $seconds = floor($sec % 60); //秒
        $hms = sprintf("%2d:%02d:%02d", $hours, $minutes, $seconds);
        return $hms;
    }
}

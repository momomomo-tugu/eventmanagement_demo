<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    protected $guarded = array('id');

    // 日付をフォーマットするための準備
    protected $dates = ['start_date', 'fin_date'];

    public static $rules = array(
        'event_title' => 'required',
        'event_image' => 'file',
        'start_date'  => 'date',
        'fin_date'    => 'date'
    );
}

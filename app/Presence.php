<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable = ['room_id','moviment','current_date'];
}

<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class prize extends Model
{
    protected $table="prize";
    public function cateprize()
    {
        return $this->hasMany('App\models\cateprize', 'prize_id', 'id');
    }
 
}

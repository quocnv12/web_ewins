<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table="role";
    public $timetamps=false;
    public function admin()
    {
        return $this->hasOne('App\User\admin', 'id', 'level');
    }
}

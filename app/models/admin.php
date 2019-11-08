<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table="admin";
    public $timetamps=true;
    public function role()
    {
        return $this->belongsTo('App\models\role', 'level', 'id');
    }
}

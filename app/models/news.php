<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table="new";
    public function cate_new()
    {
        return $this->belongsTo('App\models\cate_new', 'cate_new', 'id');
    }
}

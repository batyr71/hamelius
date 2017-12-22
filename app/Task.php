<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function mebel()
    {
        return $this->belongsTo('App\Mebel');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}

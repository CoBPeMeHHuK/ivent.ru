<?php

namespace Ivent;

use Illuminate\Database\Eloquent\Model;

class Event_info extends Model
{
    protected $table = 'event_info';
    public function events()
    {
        return $this->belongsTo('Ivent\Event');
    }
}

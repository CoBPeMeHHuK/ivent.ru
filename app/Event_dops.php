<?php

namespace Ivent;

use Illuminate\Database\Eloquent\Model;

class Event_dops extends Model
{
    protected $table = 'event_dops';
    public function event(){
        return $this->belongsToMany('Ivent\Event','references_dops','event_dops_id','event_dops');
    }
}

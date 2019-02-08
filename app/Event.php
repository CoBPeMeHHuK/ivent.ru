<?php

namespace Ivent;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function type(){
        return $this->belongsToMany('Ivent\Type','references_events','event_id','type_id');
    }
    public function event_dops(){
        return $this->belongsToMany('Ivent\Event_dops','references_dops','event_id','event_dops_id');
    }
    public function eventsInfo()
    {
        return $this->hasMany('Ivent\Events_info','event_id','id');
    }
    public function eventInfo()
    {
        return $this->hasMany('Ivent\Event_info','event_id','id');
    }
    public function eventReviews()
    {
        return $this->hasMany('Ivent\Event_reviews','event_id','id');
    }

}

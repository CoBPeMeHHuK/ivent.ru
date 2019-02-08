<?php

namespace Ivent;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function event()
    {
        return $this->belongsToMany('Ivent\Event','references_events','type_id','event_id');
    }
}

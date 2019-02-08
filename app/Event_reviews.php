<?php

namespace Ivent;

use Illuminate\Database\Eloquent\Model;

class Event_reviews extends Model
{
    protected $table = 'event_reviews';
    public function events()
    {
        return $this->belongsTo('Ivent\Event');
    }
}

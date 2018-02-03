<?php

namespace Vilbur\Biography\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Biography extends Model
{
	public $table = "biography";

	protected $appends = ['since_until'];

    //public function getSinceAttribute($date)
    //{
    //    return Carbon::createFromFormat('Y-m-d', $date)->diffForHumans();
    //}
    public function getSinceUntilAttribute($value)
    {
		$since	= Carbon::createFromFormat('Y-m-d', $this->attributes['since'])->format('Y');
		$until	= Carbon::createFromFormat('Y-m-d', $this->attributes['until'])->format('Y');
		
        return  $since!=$until ? "$since - $until" : $since;

    }
}

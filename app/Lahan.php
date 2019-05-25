<?php

namespace sarjanatani;

use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
	public function user_id()
	{
	    return $this->belongsTo('Users', 'id');
	}
	protected $fillable = [
        'luas_lahan'
    ];
}

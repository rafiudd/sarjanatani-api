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
       'user_id','luas_tanam','jenis_tanam','mulai_tanam'
    ];

    public function getUser() {
    	return $this->hasMany('App\User');
    }
}

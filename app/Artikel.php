<?php

namespace sarjanatani;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul', 'deskripsi' , 'image',
    ];
}

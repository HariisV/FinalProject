<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';

    protected $fillable = [
        'user_id', 'judul', 'tag', 'isi'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}

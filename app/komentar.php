<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table ='komentar';
    protected $fillable = [
        'user_id', 'pertanyaan_id', 'isi'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

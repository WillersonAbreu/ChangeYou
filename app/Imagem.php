<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{   

    protected $table = 'imagens';

    public function post()
    {
    	return $this->belongsTo('App\Post', 'imagem_id');
    }
}

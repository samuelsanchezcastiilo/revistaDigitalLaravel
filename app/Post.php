<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = [
		'user_id', 'category_id', 'titulo', 'slug', 'subtitulo', 'introduccion', 'resumen', 'abstracto', 'conclusion', 'referencias', 'status', 'imagen'
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

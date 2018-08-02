<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [
		'nombre', 'slug'
	];

    public function posts(){
    	return $this->hasMany(Post::class);
    }
}

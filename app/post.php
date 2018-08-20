<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Illuminate\Support\Str;

class post extends Model
{
    protected $table = 'posts';
    protected $fillable =[
    	'judul',
    	'slug_judul',
        'image',
        'isi',
    ];
    public $incrementing = false;

    protected static function boot()
    {
    	parent::boot();
    	static::creating(function($model){
    		try {
    			$model->id = Str::uuid()->toString();
    		} catch (UnsatisfiedDependencyException $e) {
    			abort(500, $e->getMessage());
    		}
    	});
    }
}

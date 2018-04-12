<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'password', 'remember_token',
    ];

    // projects 모델과 관계 연결
    public function projects()
    {
    	return $this->hasMany(Project::class);
    }

    // favorites 모델과 관계 연결
    public function favorites()
    {
    	return $this->hasMany(Favorite::class);
    }

    // comments 모델과 관계 연결
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}

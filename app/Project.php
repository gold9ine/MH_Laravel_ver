<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // 대량할당 없음
	protected $fillable = ['user_id', 'title', 'project_info', 'genre', 'image_path', 'sound_path'];

	public function user()
	{
		return $this->belongsTo(User::class);
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

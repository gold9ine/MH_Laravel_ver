<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'user_id', 'project_id', 'contents'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function project()
	{
		return $this->belongsTo(Project::class);
	}
}

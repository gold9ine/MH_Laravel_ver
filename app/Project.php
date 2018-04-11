<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // 대량할당 없음
	protected $fillable = ['title', 'artist'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

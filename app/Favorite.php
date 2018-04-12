<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
	protected $fillable = [
        'user_id', 'project_id',
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

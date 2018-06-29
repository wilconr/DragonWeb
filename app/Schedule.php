<?php

namespace DragonWeb;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['clase','dia','hora'];

    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'clase';
	}

	public function student()
	{
	    return $this->hasOne(Student::class);
	}
}

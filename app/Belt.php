<?php

namespace DragonWeb;

use Illuminate\Database\Eloquent\Model;

class Belt extends Model
{
    protected $fillable = ['color','avatar'];
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'color';
	}

	public function maestro()
	{
	    return $this->hasOne(Maestro::class);
	}

	public function student()
	{
	    return $this->hasOne(Student::class);
	}
}

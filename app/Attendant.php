<?php

namespace DragonWeb;

use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    protected $fillable = ['nick_name','nombres','apellidos','telefono','direccion','student_id'];

    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'nick_name';
	}

	public function students()
	{
	    return $this->belongsToMany(Student::class)->withTimestamps();
	}
}

<?php

namespace DragonWeb;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nick_name','nombres','apellidos','genero','fecha_nac','belt_id','telefono','direccion','fecha_ing','peso','estatura','rh','alergias','seguro_med', 'schedule_id','attendant_id', 'avatar'];
    
    protected $dates = ['fecha_nac', 'fecha_ing'];

    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'nick_name';
	}
	
	public function belt()
	{
	    return $this->belongsTo(Belt::class);
	}
	
	public function schedule()
	{
	    return $this->belongsTo(Schedule::class);
	}

	public function attendants()
	{
	    return $this->belongsToMany(Attendant::class)->withTimestamps();
	}

}

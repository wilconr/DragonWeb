<?php

namespace DragonWeb;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable = ['nick_name','nombres','apellidos','fecha_nac','belt_id','avatar'];

    protected $dates = ['fecha_nac'];
    
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


}

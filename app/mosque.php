<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mosque extends Model
{
    protected $table = "masjidku";

    protected $guarded = [];

    public function jadwalJumatan()
    {
    	return $this->hasMany(FridaySchedule::class, 'id_mosque');
    }
}

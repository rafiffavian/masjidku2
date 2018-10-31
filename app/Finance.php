<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
	protected $table = "finances";
	protected $guarded = [];
    public function tipeCatatan()
    {
    	return $this->belongsTo(Finance_Type::class,'id_finance_type');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MosqueDonation extends Model
{
   protected $table = "mosque_donation";
   protected $guarded = [];

   public function tipeDonasi()
   {
   	 return $this->belongsTo(MasterDonation::class,'id_master_donation');
   }
}

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

    public function jadwalKajian()
    {
    	return $this->hasMany(mykajian::class, 'id_mosque');
    }
    public function keuanganMasjid()
    {
        return $this->hasMany(Finance::class, 'id_mosque');
    }
    public function mosqueImage()
    {
        return $this->hasMany(Mosque_Image::class, 'id_mosque');
    }
    public function memberMosque()
    {
        return $this->hasMany(Mosque_member::class, 'id_mosque');
    }
    public function Donasi()
    {
        return $this->hasMany(MosqueDonation::class, 'id_mosque');
    }
}

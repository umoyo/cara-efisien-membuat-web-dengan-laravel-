<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    protected $table = 'kategori';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nama', 'deskripsi',
    ];

    public function dataTipe()
    {
          return $this->hasMany('App\Tipe');
     } 
  
}

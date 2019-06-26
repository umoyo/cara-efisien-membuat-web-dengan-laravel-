<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{

 
    protected $table = 'tipe';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nama', 'foto_data',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}

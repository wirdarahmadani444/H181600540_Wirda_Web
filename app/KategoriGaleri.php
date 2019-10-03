<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $fillable = [
        'nama','users_id',
    ];
    
    protected $casts = [
    
    ];
}

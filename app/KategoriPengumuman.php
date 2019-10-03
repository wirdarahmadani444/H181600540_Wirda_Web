<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $fillable = [
        'nama','users_id',
    ];
    
    protected $casts = [
    
    ];
}

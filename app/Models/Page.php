<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'city_id','url'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}


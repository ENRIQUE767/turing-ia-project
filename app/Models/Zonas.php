<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
    protected $table = 'zonas';

    protected $fillable = ['id_estado','nombre','status'];

    public function estados()
    {
        return $this->belongsTo('App\Models\Estados', 'id_estado', 'id');
    }
}

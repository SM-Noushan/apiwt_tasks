<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedRecord extends Model
{
    use HasFactory;

    public function medsR(){
        // return $this->belongsTo(Med::class,'by_mid', 'id');
        return $this->hasMany(Med::class,'id', 'by_mid');
    }


    public function medsRR(){
        return Med::where('id', $this->by_mid)->first();
    }
}

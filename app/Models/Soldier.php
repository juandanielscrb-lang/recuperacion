<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    use HasFactory;

    public function services(){
        return $this->belongsToMany(Service::class);
    }

    public function army_corp(){
        return $this->belongsTo(Army_corp::class);
    }

    public function quarter(){
        return $this->belongsTo(Quarter::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
}

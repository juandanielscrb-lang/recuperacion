<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Army_corp extends Model
{
    use HasFactory;

    public function soldier(){
        return $this->hasMany(Soldier::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldier_service extends Model
{
    use HasFactory;

    public function soldier(){
        return $this->belongsTo(Soldier::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}

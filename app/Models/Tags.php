<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Tags extends Model
{

    public function cats(){
        return $this->belongsToMany(Cat::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    use HasFactory;

    public $fillable = ['code', 'name', 'description', 'type', 'image'];
    public function crates()
    {
        return $this->belongsToMany(Crate::class)
        ->withPivot('qty')
        ->withTimestamps();
    }
}

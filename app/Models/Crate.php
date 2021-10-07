<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crate extends Model
{

    use HasFactory;

    public $fillable = ['code', 'container_id', 'name', 'description'];
    
    public function container()
    {
        return $this->belongsTo(Container::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)
        ->withTimestamps();
    }
}

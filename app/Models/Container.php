<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    public $fillable = ['code', 'name', 'description'];

    public function crates()
    {
        return $this->hasMany(Crate::class);
    }
}

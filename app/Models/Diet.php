<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diet extends Model
{
    /** @use HasFactory<\Database\Factories\DietFactory> */
    use HasFactory;
    use SoftDeletes;

    public function dinosaurs() : HasMany {
        return $this->hasMany(Dinosaur::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dinosaur extends Model
{
    /** @use HasFactory<\Database\Factories\DinosaurFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'weight', 'length', 'height', 'color', 'diet_id', 'environment_id', 'type_id'
    ];

    public function diet(): BelongsTo
    {
        return $this->BelongsTo(Diet::class);
    }

    public function type(): BelongsTo
    {
        return $this->BelongsTo(Type::class);
    }

    public function environment(): BelongsTo
    {
        return $this->BelongsTo(Environment::class);
    }
}


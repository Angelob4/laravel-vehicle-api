<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;

    use HasFactory;

    /**
     * Get the carModel that owns the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carModel()
    {
        return $this->hasMany(CarModel::class);
    }

    /**
    * Scope de uma query para buscar uma marca pelo nome;
    */
    public function scopeGetIdByName($query, $name){

        return $query->where('name', $name);

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public $table = 'products';
    use HasFactory;
    protected $fillable = [
        'status',
        'operating_parts_id',
        'name',
        'details',
        'dimensions',
        'date'
    ];

    public function components(): HasMany
    {
        return $this->hasMany(Component::class, 'product_id');
    }
}

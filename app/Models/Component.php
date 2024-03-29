<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public $table = 'components';

    use HasFactory;

    protected $fillable = [
        'name',
        'product_id'
    ];
}

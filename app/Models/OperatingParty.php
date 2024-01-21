<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingParty extends Model
{
    public $table = 'operating_parties';
    use HasFactory;
    protected $fillable = [
        'name'
    ];
}

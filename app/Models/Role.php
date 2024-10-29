<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

     protected $fillable = [
        "name", "class", "race", "damage_type", "gender", "armor_class", "starter_weapon"
    ];
}

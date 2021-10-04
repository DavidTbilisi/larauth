<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class);

    }
    public function group()
    {
        return $this->hasMany(Group::class);

    }
}

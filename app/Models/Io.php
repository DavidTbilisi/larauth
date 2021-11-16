<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Io extends Model
{
    use HasFactory;

    protected $table = "io";
    use SoftDeletes;

    public function type()
    {
        return $this->belongsTo(Io_type::class, 'io_type_id');
    }
}

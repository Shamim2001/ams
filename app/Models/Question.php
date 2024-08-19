<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    function type() : BelongsTo {
        return $this->belongsTo(Type::class);
    }
}

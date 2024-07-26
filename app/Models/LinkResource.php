<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkResource extends Model
{
    use HasFactory;
    protected $table='link_resources';
    protected $guarded =['id'];
}

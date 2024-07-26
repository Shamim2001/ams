<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Company extends Model
{
    /*use HasFactory , Searchable;
    protected $guarded =['id'];

    public function toSearchableArray()
    {
        return [

            'name' => $this->name,
            'description' => $this->description,
        ];
    }*/
    use HasFactory;
    protected $table='companys';
    protected $guarded =['id'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}

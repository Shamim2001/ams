<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory , Searchable;
    protected $guarded =['id'];

    public function toSearchableArray()
    {
        return [

            'company_name' => $this->company_name,
            'name' => $this->name,
            'technical_name'=>$this->technical_name,
            'description' => $this->description,
        ];
    }
}

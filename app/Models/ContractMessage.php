<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractMessage extends Model
{
    use HasFactory;

    protected $table="contract_messages";
    protected $guarded=['id'];
}

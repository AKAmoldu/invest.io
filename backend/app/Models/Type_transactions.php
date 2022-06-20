<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_transactions extends Model
{
    use HasFactory;

    public $table = "type_transactions";

    public $fillable = [
        "name"
    ];

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}

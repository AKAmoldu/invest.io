<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public $table = "categories";

    public $fillable = [
        "name"
    ];

    public function investments()
    {
        return $this->hasMany(Investments::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;
    public $table = "currencies";

    public $fillable = [
        "label",
        "short_label",
        "symbol"
    ];

    public function user_profil()
    {
        return $this->hasMany(User_profil::class);
    }
}

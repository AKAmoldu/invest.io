<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_profil extends Model
{
    use HasFactory;
    public $table = "user_profil";

    public $fillable = [
        "full_name",
        "country",
        "user_id",
        "currency_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currencies::class);
    }

    public function investments()
    {
        return $this->hasMany(Investments::class);
    }
}

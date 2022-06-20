<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investments extends Model
{
    use HasFactory;

    public $table = "investments";

    public $fillable = [
        "name",
        "amount_initial",
        "amount_actual",
        "user_profil_id",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function user_profil()
    {
        return $this->belongsTo(User_profil::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}

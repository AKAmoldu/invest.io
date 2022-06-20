<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    public $table = "categories";

    public $fillable = [
        "investment_id",
        "amount",
        "date_transaction",
        "type_transaction_id"
    ];

    public function investment()
    {
        return $this->belongsTo(Investments::class);
    }
    public function type_transaction()
    {
        return $this->belongsTo(Type_transactions::class);
    }
}

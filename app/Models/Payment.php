<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['contract_id', 'milestone_id', 'payment_date', 'amount', 'payment_status'];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function milestone()
    {
        return $this->belongsTo(Milestone::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'sex',
        'customer_id',
        'phone',
        'contact',
        'address',
        'position',
        'unit',
        'tax_code',
        'invoice_address',
        'bank_account',
        'customer_type',
        'accounting_rights',
        'key_order',
        'description_debt',
        'debt_term',
        'allowable_debt_description',
        'customer_notes',
        'user_created',
    ];

    public function phonezalos()
    {
        return $this->hasMany(Phonezalo::class);
    }
}

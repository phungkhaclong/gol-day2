<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'sex',
        'custommer-id',
        'phone',
        'phonezalo',
        'address',
        'phonezalo',
        'position',
        'unit',
        'tax-code',
        'invoice address',
        'bank-account',
        'customer-type',
        'description-debt',
        'debt-term',
        'allowable-debt-description',
        'customer-notes',
    ];
}

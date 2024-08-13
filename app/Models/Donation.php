<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'campaign_id',
        'name',
        'email',
        'donation_amount',
        'city',
        'zipcode',
        'payment_status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    use HasFactory;
    protected $table = 'invests';
    protected $fillable = [
        'user_id',
        'campaign_id',
        'name',
        'email',
        'investment_amount',
        'equity_percentage',
        'city',
        'zipcode',
        'payment_status',
    ];

public function campaign(){
    return $this->belongsTo(Campaign::class,'campaign_id');
}}

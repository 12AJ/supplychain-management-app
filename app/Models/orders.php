<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;


    protected $fillable = [
        'customer_name',
        'customer_email',
        'order_status',
        'total_sales',
        'shipping_charges',
        'tax_percent',
        'net_total',
        'amout_paid',
        'payment_status',

        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'orders';
}

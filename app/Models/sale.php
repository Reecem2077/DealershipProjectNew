<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class sale
 * @package App\Models
 * @version May 6, 2023, 1:43 am UTC
 *
 * @property \App\Models\Customer $customer
 * @property number $sale_price
 * @property string $sale_date
 * @property integer $customer_id
 * @property string $customer_name
 * @property string $payment_type
 */
class sale extends Model
{


    public $table = 'sale';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'sale_price',
        'sale_date',
        'customer_id',
        'customer_name',
        'payment_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sale_price' => 'decimal:2',
        'sale_date' => 'date',
        'customer_id' => 'integer',
        'customer_name' => 'string',
        'payment_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sale_price' => 'nullable|numeric',
        'sale_date' => 'nullable',
        'customer_id' => 'nullable|integer',
        'customer_name' => 'nullable|string|max:30',
        'payment_type' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }
}


	
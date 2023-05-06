<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class customer
 * @package App\Models
 * @version May 6, 2023, 1:40 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sales
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $email
 * @property string $address
 */
class customer extends Model
{


    public $table = 'customer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'nullable|string|max:30',
        'last_name' => 'nullable|string|max:30',
        'phone_number' => 'nullable|string|max:20',
        'email' => 'nullable|string|max:30',
        'address' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'customer_id');
    }
}

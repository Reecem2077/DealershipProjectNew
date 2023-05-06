<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class car
 * @package App\Models
 * @version May 6, 2023, 1:25 am UTC
 *
 * @property string $car_name
 * @property string $manufacture_year
 * @property number $car_price
 * @property string $fuel_type
 * @property boolean $on_sale
 */
class car extends Model
{


    public $table = 'car';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'car_name',
        'manufacture_year',
        'car_price',
        'fuel_type',
        'on_sale'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'car_name' => 'string',
        'manufacture_year' => 'string',
        'car_price' => 'decimal:2',
        'fuel_type' => 'string',
        'on_sale' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'car_name' => 'nullable|string|max:30',
        'manufacture_year' => 'nullable|string|max:30',
        'car_price' => 'nullable|numeric',
        'fuel_type' => 'nullable|string|max:20',
        'on_sale' => 'required|boolean',
		'carimage' => 'nullable'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class shift
 * @package App\Models
 * @version May 6, 2023, 1:35 am UTC
 *
 * @property integer $employee_id
 * @property string $day_of_week
 * @property time $start_time
 * @property time $end_time
 */
class shift extends Model
{


    public $table = 'shift';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'employee_id',
        'day_of_week',
        'start_time',
        'end_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'day_of_week' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'nullable|integer',
        'day_of_week' => 'nullable|string|max:30',
        'start_time' => 'nullable',
        'end_time' => 'nullable'
    ];

    
}

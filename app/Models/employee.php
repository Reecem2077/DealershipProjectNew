<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employee
 * @package App\Models
 * @version May 6, 2023, 1:03 am UTC
 *
 * @property string $firstname
 * @property string $surname
 * @property string $employeetype
 * @property string $dateofbirth
 */
class employee extends Model
{


    public $table = 'employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'employeetype',
        'dateofbirth'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'employeetype' => 'string',
        'dateofbirth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'employeetype' => 'nullable|string|max:20',
        'dateofbirth' => 'nullable'
    ];
	
	
	
	public function user()
{
    return $this->belongsTo(\App\User::class,'userid','id');
}

  $loggedInUser = Auth::user ( ( );
 echo "Employee Name : "$loggedInUser->employee;
 echo "Employee Type  : "SloggedInUser->employee->employeetype;
  
}

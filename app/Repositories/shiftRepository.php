<?php

namespace App\Repositories;

use App\Models\shift;
use App\Repositories\BaseRepository;

/**
 * Class shiftRepository
 * @package App\Repositories
 * @version May 6, 2023, 1:35 am UTC
*/

class shiftRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'employee_id',
        'day_of_week',
        'start_time',
        'end_time'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return shift::class;
    }
}

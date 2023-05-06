<?php

namespace App\Repositories;

use App\Models\car;
use App\Repositories\BaseRepository;

/**
 * Class carRepository
 * @package App\Repositories
 * @version May 6, 2023, 1:25 am UTC
*/

class carRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_name',
        'manufacture_year',
        'car_price',
        'fuel_type',
        'on_sale'
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
        return car::class;
    }
}

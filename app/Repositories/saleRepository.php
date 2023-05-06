<?php

namespace App\Repositories;

use App\Models\sale;
use App\Repositories\BaseRepository;

/**
 * Class saleRepository
 * @package App\Repositories
 * @version May 6, 2023, 1:43 am UTC
*/

class saleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sale_price',
        'sale_date',
        'customer_id',
        'customer_name',
        'payment_type'
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
        return sale::class;
    }
}

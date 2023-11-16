<?php

namespace App\Repositories;

use App\Models\Journals;
use App\Repositories\BaseRepository;

/**
 * Class JournalsRepository
 * @package App\Repositories
 * @version June 23, 2023, 10:26 am UTC
*/

class JournalsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'title',
        'abstract',
        'published_by',
        'published',
        'edition_vol'
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
        return Journals::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Educations;
use App\Repositories\BaseRepository;

/**
 * Class EducationsRepository
 * @package App\Repositories
 * @version June 23, 2023, 11:09 am UTC
*/

class EducationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'school_attended',
        'certificate_awarded',
        'graduated_year'
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
        return Educations::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Books;
use App\Repositories\BaseRepository;

/**
 * Class BooksRepository
 * @package App\Repositories
 * @version June 23, 2023, 10:11 am UTC
*/

class BooksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'title',
        'published_year',
        'publisher',
        'isbn'
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
        return Books::class;
    }
}

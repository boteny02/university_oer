<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Journals
 * @package App\Models
 * @version June 23, 2023, 10:26 am UTC
 *
 * @property integer $teacher_id
 * @property string $title
 * @property string $abstract
 * @property string $published_by
 * @property string $published
 * @property string $edition_vol
 */
class Journals extends Model
{


    public $table = 'journals';
    



    public $fillable = [
        'teacher_id',
        'title',
        'abstract',
        'published_by',
        'published',
        'edition_vol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'title' => 'string',
        'abstract' => 'string',
        'published_by' => 'string',
        'published' => 'date',
        'edition_vol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher_id' => 'required',
        'title' => 'required',
        'abstract' => 'required',
        'published_by' => 'required',
        'published' => 'required',
        'edition_vol' => 'required'
    ];

    
}

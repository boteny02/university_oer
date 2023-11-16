<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Books
 * @package App\Models
 * @version June 23, 2023, 10:11 am UTC
 *
 * @property integer $teacher_id
 * @property string $title
 * @property string $published_year
 * @property string $publisher
 * @property string $isbn
 */
class Books extends Model
{


    public $table = 'books';
    



    public $fillable = [
        'teacher_id',
        'title',
        'published_year',
        'publisher',
        'isbn'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'title' => 'string',
        'published_year' => 'date',
        'publisher' => 'string',
        'isbn' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher_id' => 'required',
        'title' => 'required',
        'published_year' => 'required',
        'publisher' => 'required',
        'isbn' => 'required'
    ];

    
}

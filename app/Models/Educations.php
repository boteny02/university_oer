<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Educations
 * @package App\Models
 * @version June 23, 2023, 11:09 am UTC
 *
 * @property integer $teacher_id
 * @property string $school_attended
 * @property string $certificate_awarded
 * @property string $graduated_year
 */
class Educations extends Model
{


    public $table = 'educations';
    



    public $fillable = [
        'teacher_id',
        'school_attended',
        'certificate_awarded',
        'graduated_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'school_attended' => 'string',
        'certificate_awarded' => 'string',
        'graduated_year' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher_id' => 'required',
        'school_attended' => 'required',
        'certificate_awarded' => 'required',
        'graduated_year' => 'required'
    ];

    
}

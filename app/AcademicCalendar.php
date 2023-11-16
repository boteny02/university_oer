<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicCalendar extends Model
{
    use HasFactory;

    protected $table = 'academic_calendar';

protected $fillable = [
'academic_year',
'semester',
'start_date',
'end_date',
];
}

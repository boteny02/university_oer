<?php

namespace App;


use App\Models\books;
use App\Models\Education;
use App\Models\Journals;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'gender',
        'phone',
        'dateofbirth',
        'current_address',
        'permanent_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function classes()
    {
        return $this->hasMany(Grade::class);
    }

    public function books()
    {
        return $this->hasMany(Models\books::class);
    }

    public function students()
    {
        return $this->classes()->withCount('students');
    }
    public function educations()
    {
        return $this->hasMany(Models\Education::class);
    }
    public function journals()
    {
        return $this->hasMany(Models\Journals::class);
    }
}

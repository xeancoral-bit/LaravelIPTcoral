<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Table name (Laravel will assume "students" if not specified)
    protected $table = 'students';

    // Primary key (Laravel assumes "id")
    protected $primaryKey = 'id';

    // Columns that can be mass-assigned
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department_id',
        'course_id',
        'year_level',
    ];

    // Hide timestamps if you don’t want them in JSON
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

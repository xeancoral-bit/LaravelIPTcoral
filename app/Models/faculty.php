<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    // Table name (optional if it matches 'faculties')
    protected $table = 'faculties';

    // Primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Mass assignable fields
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department_id',
        'phone_number',
        'position'
    ];

    // Hidden fields (for JSON)
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
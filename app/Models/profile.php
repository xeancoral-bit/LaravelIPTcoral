<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Table name (Laravel expects 'profiles' automatically)
    protected $table = 'profiles';

    // Primary key (default is 'id', override if needed)
    protected $primaryKey = 'id';

    // Mass assignable columns
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'bio'
    ];

    // Hide timestamps in JSON
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
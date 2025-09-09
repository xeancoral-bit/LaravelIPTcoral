<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;

    // Table name (optional, Laravel will guess "demos")
    protected $table = 'demos';

    // Mass-assignable fields
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
}

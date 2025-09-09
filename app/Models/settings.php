<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    // Table name (optional if Laravel's pluralization matches your DB)
    protected $table = 'settings';

    // Mass-assignable fields
    protected $fillable = [
        'key',        // e.g., "site_name"
        'value',      // e.g., "Web-Based Liquidation System"
        'description' // optional description of the setting
    ];
}

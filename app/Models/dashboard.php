<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    // Laravel will assume the table name is 'dashboards'
    protected $table = 'dashboards';

    // Primary key (default is 'id')
    protected $primaryKey = 'id';

    // Mass assignable columns
    protected $fillable = [
        'user_id',
        'widget_name',
        'settings',
        'last_viewed',
    ];

    // If you want timestamps automatically handled (created_at, updated_at)
    public $timestamps = true;

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
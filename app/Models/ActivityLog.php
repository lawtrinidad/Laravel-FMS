<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'entity_type',
        'entity_name',
        'previous_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

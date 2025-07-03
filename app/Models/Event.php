<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'organization_id',
        'title',
        'pembicara',
        'description',
        'event_date',
        'location',
        'poster',
        'status',
        'created_by',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

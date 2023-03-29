<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Space extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'location',
        'phone',
        'longitude',
        'latitude',
        'status',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    
}

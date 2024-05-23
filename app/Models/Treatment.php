<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treatment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function disease(): BelongsTo
    {
        return $this->belongsTo(Disease::class);
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = $value ? round($value, 2) : '0.00';
    }
}

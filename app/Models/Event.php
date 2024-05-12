<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Define the mutator for the price attribute
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = $value ? round($value, 2) : '0.00';
    }
}

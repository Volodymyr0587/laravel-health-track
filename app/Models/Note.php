<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($note) {
            $slug = Str::slug($note->name);
            $count = Note::where('slug', 'LIKE', "{$slug}%")->count();
            $note->slug = $count ? "{$slug}-{$count}" : $slug;
        });

        static::updating(function ($note) {
            $slug = Str::slug($note->name);
            $count = Note::where('slug', 'LIKE', "{$slug}%")->where('id', '!=', $note->id)->count();
            $note->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
}

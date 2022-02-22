<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use JamesMills\Uuid\HasUuidTrait;

class Source extends Model
{
    use HasUuidTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'reference_url',
        'date'
    ];

    /**
     * Get the takeaways for the single source.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function takeaways()
    {
        return $this->hasMany(Takeaway::class);
    }

    /**
     * Get the tags for the single source.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    /** 
     * Get the user that owns the source.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

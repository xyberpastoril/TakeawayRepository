<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'reference_url',
        'date'
    ];

    /**
     * Get the takeaways for the single source.
     */
    public function takeaways()
    {
        return $this->hasMany(Takeaway::class);
    }

    /**
     * Get the tags for the single source.
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}

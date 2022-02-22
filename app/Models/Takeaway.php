<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use JamesMills\Uuid\HasUuidTrait;

class Takeaway extends Model
{
    use HasUuidTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'source_id',
        'content',
    ];

    /**
     * Get the source that owns the takeaway.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function source()
    {
        return $this->belongsTo(Source::class);
    }
}

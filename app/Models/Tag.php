<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the source that owns the tag.
     */
    public function source()
    {
        return $this->belongsTo(Source::class);
    }
}

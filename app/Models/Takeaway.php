<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Takeaway extends Model
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
     * Get the source that owns the takeaway.
     */
    public function source()
    {
        return $this->belongsTo(Source::class);
    }
}

<?php namespace App\Models;

/**
 * Class Album
 *
 * @package App\Models
 */
class Album extends Model
{

    //--------------------------------------
    // Relationships
    //--------------------------------------

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

}

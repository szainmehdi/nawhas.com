<?php namespace App\Models;

/**
 * Class Artist
 *
 * @package App\Models
 */
class Artist extends Model {

	//--------------------------------------
    // Relationships
	//--------------------------------------
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

}

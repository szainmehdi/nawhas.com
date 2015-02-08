<?php namespace App\Models;

/**
 * Class Track
 *
 * @package App\Models
 */
class Track extends Model {

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}

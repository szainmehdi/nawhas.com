<?php namespace App\Models;

/**
 * Class Track
 *
 * @package App\Models
 * @property integer $id 
 * @property string $title 
 * @property string $slug 
 * @property integer $album_id 
 * @property integer $artist_id 
 * @property string $deleted_at 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property-read Artist $artist 
 * @property-read Album $album 
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereAlbumId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereArtistId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Track whereUpdatedAt($value)
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

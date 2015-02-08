<?php namespace App\Models;

/**
 * Class Album
 *
 * @package App\Models
 * @property integer $id 
 * @property string $title 
 * @property string $slug 
 * @property string $description 
 * @property integer $year_islamic 
 * @property string $release_date 
 * @property integer $artist_id 
 * @property string $deleted_at 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property-read Artist $artist 
 * @property-read \Illuminate\Database\Eloquent\Collection|Track[] $tracks 
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereYearIslamic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereReleaseDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereArtistId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Album whereUpdatedAt($value)
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

<?php namespace App\Models;

/**
 * Class Artist
 *
 * @package App\Models
 * @property integer $id 
 * @property string $name 
 * @property string $slug 
 * @property string $description 
 * @property string $website 
 * @property string $deleted_at 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property-read \Illuminate\Database\Eloquent\Collection|Album[] $albums 
 * @property-read \Illuminate\Database\Eloquent\Collection|Track[] $tracks 
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Artist whereUpdatedAt($value)
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

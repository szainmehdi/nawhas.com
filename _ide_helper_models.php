<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Album {}
}

namespace App\Models{
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
	class Artist {}
}

namespace App\Models{
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
	class Track {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property integer $id 
 * @property string $name 
 * @property string $email 
 * @property string $password 
 * @property string $remember_token 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User {}
}


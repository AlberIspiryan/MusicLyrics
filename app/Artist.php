<?php
/**
 * Created by PhpStorm.
 * User: CodeRiders-May
 * Date: 14.06.2018
 * Time: 16:57
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['artist_name'];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function artistDetails()
    {
        return $this->hasOne('App\ArtistDetail', 'artist_id');
    }
}
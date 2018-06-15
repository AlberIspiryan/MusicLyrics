<?php
/**
 * Created by PhpStorm.
 * User: CodeRiders-May
 * Date: 14.06.2018
 * Time: 17:04
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistDetail extends Model
{
    protected $table = 'artist_details';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'artist_id',
        'history_text',
        'history_tag',
        'country',
        'genres',
        'picture'
    ];

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

    public function artist(){
        return $this->belongsTo('App\Artist');
    }
}
<?php

namespace App\Http\Controllers\ApiControllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Artist;
use App\ArtistDetail;

class ArtistsController extends BaseController
{
    /** Returning One Artist by name */
    public function showOneArtist($name)
    {
        $info = "artist";
        $name = urlDecoder($name);

        $data = Artist::where('artist_name', $name)->first();
        $check = checkSelectEmptiness($data,$info);

        return response()->json($check);
    }

    /** Returning One Artist Details by his ID */
    public function showOneArtistDetails($id)
    {
        $info = "artist details";
        $data = Artist::with('artistDetails')->find($id);
        $check = checkSelectEmptiness($data, $info);

        return response()->json($check);
    }
    public function showOneArtistAlbums($artistId)
    {
        $info = "albums";


    }
}
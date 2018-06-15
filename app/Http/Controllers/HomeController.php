<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Artist;

class HomeController extends BaseController
{
    public function index (Request $request)
    {
        $artists_count = Artist::count();
        $data = [
            "artists_count" => $artists_count
        ];
        return view('home', $data);
    }
}

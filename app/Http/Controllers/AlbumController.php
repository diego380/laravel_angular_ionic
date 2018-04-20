<?php

namespace App\Http\Controllers;

use App\Model\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index()
    {
        return Album::all();
    }


    public function store(Request $request)
    {

    }

    public function show(Album $album)
    {

    }

    public function update(Request $request, Album $album)
    {

    }

    public function destroy(Album $album)
    {

    }
}

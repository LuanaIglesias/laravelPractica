<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    public function directory()
    {
      $actores = Actor::all();

      $vac = compact('actores');
      return view('actores', $vac);
    }
    public function show($id)
    {

      $actor = Actor::find($id);
      return view('actores', compact($actor));

    }
}

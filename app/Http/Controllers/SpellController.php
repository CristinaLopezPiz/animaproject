<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spell;

class SpellController extends Controller
{

  public function index(){
    return view('spells', [
      'spells' => Spell::where('Path', 'Luz')->get()
    ]);
  }

}

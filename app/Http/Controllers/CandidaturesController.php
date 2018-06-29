<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidature;

class CandidaturesController extends Controller
{
    public function create_candidature(Request $request)
    {
      $candidature = new Candidature();
      $candidature->mail = $request->input('mail');
      $candidature->content = $request->input('content');
      $candidature->save();

      return view('feedback');
    }
}

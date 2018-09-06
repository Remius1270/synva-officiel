<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidature;

use App\Pages_content;

use Illuminate\Database\Eloquent\Model;

class GlobalController extends Controller
{

  public function get_formation($specification)
  {
    $specification = $this->unaccent($specification);
    $text = Pages_content::where('name',$specification)->first()->content;
    return view('formation/'.$specification,[
      'text' => $text
    ]);
  }

  public function get_view($view)
  {
    return view($view);
  }

  public function admin()
  {
    if(isset($_SESSION['session']) && $_SESSION['session'] == 'password')
    {
      return view('admin.admin_pannel');
    }
    else{
      return view('admin.admin_login');
    }
  }

  public function login(Request $request)
  {
    if(isset($_SESSION['session']) && $request->input('password') == 'password' && $request->input('mail') == 'admin@admin.com')
    {
      $_SESSION['session'] = 'password';
      return redirect('admin/inscriptions');
    }
    else{
      return view('admin.admin_login',[
        'success' => false
      ]);
    }
  }

  public function inscriptions_liste()
  {
    $liste = Candidature::all();
    return view('admin.inscriptions',[
      'liste' => $liste
    ]);
  }

  public function display_one($id)
  {
    $candidature = Candidature::find($id);
    return view('admin.candidature',[
      'candidature' => $candidature
    ]);
  }



  /* fonctions auxiliaires */

  function unaccent($string)
{
    return preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml|caron);~i', '$1', htmlentities($string, ENT_COMPAT, 'UTF-8'));
}

public function disconnect()
{
  $_SESSION['session'] = 'papassword';
  return redirect('admin');
}

public function pages_list()
{
  if($this->is_admin())
  {
    $pages = Pages_content::all()->toArray();
    return view('admin/gestionnaire',[
      "pages" => $pages
    ]);
  }
  else{
    return view('admin.admin_login',[
      'success' => false
    ]);
  }
}

public function is_admin()
{
  if(isset($_SESSION['session']) && $_SESSION['session'] == 'password')
  {
    return true;
  }
  else
  {
    return false;
  }
}

}

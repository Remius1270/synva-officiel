<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidature;

class GlobalController extends Controller
{

  public function get_formation($specification)
  {
    return view('formation/'.$specification);
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

  public function disconnect()
  {
    $_SESSION['session'] = '';
    return redirect('admin');
  }
}

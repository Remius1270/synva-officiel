<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Candidature;

use App\Pages_content;

use Illuminate\Http\UploadedFile;

use Illuminate\Database\Eloquent\Model;

class GlobalController extends Controller
{

  public function get_formation($specification)
  {
    $specification = $this->unaccent($specification);
    $text = Pages_content::where('name',$specification)->first()->content;
    $title = Pages_content::where('name',$specification)->first()->name;
    return view('formation/'.$specification,[
      'text' => $text,
      'name' => $title
    ]);
  }

  public function get_view($view)
  {
    $images = \File::allFiles('img/gallerie');
    return view($view,[
      'images' => $images
    ]);
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

  public function pages_list()
  {
      $pages = Pages_content::all()->toArray();
      return view('admin/gestionnaire',[
        "pages" => $pages
      ]);
  }

  public function modify_page($page_name)
  {
    $text = Pages_content::where('name',$page_name)->first()->content;
    $title = Pages_content::where('name',$page_name)->first()->name;
    return view('admin/edit',[
      'text' => $text,
      'title' => $title
    ]);
  }

  public function save_page(Request $request)
  {
    $text = Pages_content::where('name',$request->input('page'))->first();
    $text->content = $request->input('text');
    $text->save();

    return redirect('admin/gestionnaire');

  }

  public function galerie()
  {
    $images = \File::allFiles('img/gallerie');
    return view('admin/galerie',[
      'images' => $images
    ]);
  }

  public function delete($file)
  {
    \File::delete(public_path('img/gallerie/').$file.'.png');
    return redirect('admin/galerie');
  }

  public function upload_pic(Request $request)
  {
    if ($request->hasFile('fileToUpload')) {
        $image = $request->file('fileToUpload');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('img/gallerie/');
        $image->move($destinationPath, $name);

    return redirect('admin/galerie');
  }
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

public function is_admin()
{
  dd($_SESSION['session']);
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

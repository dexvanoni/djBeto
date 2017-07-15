<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Html;
use Illuminate\Support\Facades\DB;
use App\Edition;

class EditionController extends Controller
{
  private $edition;

  public function __construct(Edition $edition)
  {
    $this->edition = $edition;
  }

  public function index()
  {

    $edition = Edition::orderBy('id', 'DESC')->paginate(1000);

    return view('editar.index',compact('edition'));

  }

  public function create(){

    $edition = $this->edition->all();

    return view('editar.create', compact('edition'));

  }

  public function store(Request $request){

    if (Input::file('img_about')){

      $img_about = Input::file('img_about');
      $ext_about = $img_about-> getClientOriginalExtension();
      if($ext_about != 'jpg' && $ext_about != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f1')){

      $f1 = Input::file('f1');
      $ext_f1 = $f1-> getClientOriginalExtension();
      if($ext_f1 != 'jpg' && $ext_f1 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f2')){

      $f2 = Input::file('f2');
      $ext_f2 = $f2-> getClientOriginalExtension();
      if($ext_f2 != 'jpg' && $ext_f2 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f3')){

      $f3 = Input::file('f3');
      $ext_f3 = $f3-> getClientOriginalExtension();
      if($ext_f3 != 'jpg' && $ext_f3 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f4')){

      $f4 = Input::file('f4');
      $ext_f4 = $f4-> getClientOriginalExtension();
      if($ext_f4 != 'jpg' && $ext_f4 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f5')){

      $f5 = Input::file('f5');
      $ext_f5 = $f5-> getClientOriginalExtension();
      if($ext_f5 != 'jpg' && $ext_f5 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f6')){

      $f6 = Input::file('f6');
      $ext_f6 = $f6-> getClientOriginalExtension();
      if($ext_f6 != 'jpg' && $ext_f6 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f7')){

      $f7 = Input::file('f7');
      $ext_f7 = $f7-> getClientOriginalExtension();
      if($ext_f7 != 'jpg' && $ext_f7 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f8')){

      $f8 = Input::file('f8');
      $ext_f8 = $f8-> getClientOriginalExtension();
      if($ext_f8 != 'jpg' && $ext_f8 != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f1_e')){

      $f1_e = Input::file('f1_e');
      $ext_f1_e = $f1_e-> getClientOriginalExtension();
      if($ext_f1_e != 'jpg' && $ext_f1_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f2_e')){

      $f2_e = Input::file('f2_e');
      $ext_f2_e = $f2_e-> getClientOriginalExtension();
      if($ext_f2_e != 'jpg' && $ext_f2_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f3_e')){

      $f3_e = Input::file('f3_e');
      $ext_f3_e = $f3_e-> getClientOriginalExtension();
      if($ext_f3_e != 'jpg' && $ext_f3_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f4_e')){

      $f4_e = Input::file('f4_e');
      $ext_f4_e = $f4_e-> getClientOriginalExtension();
      if($ext_f4_e != 'jpg' && $ext_f4_e != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f1_b')){

      $f1_b = Input::file('f1_b');
      $ext_f1_b = $f1_b-> getClientOriginalExtension();
      if($ext_f1_b != 'jpg' && $ext_f1_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f2_b')){

      $f2_b = Input::file('f2_b');
      $ext_f2_b = $img_f2_b-> getClientOriginalExtension();
      if($ext_f2_b != 'jpg' && $ext_f2_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f3_b')){

      $f3_b = Input::file('f3_b');
      $ext_f3_b = $img_f3_b-> getClientOriginalExtension();
      if($ext_f3_b != 'jpg' && $ext_f3_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    if (Input::file('f4_b')){

      $f4_b = Input::file('f4_b');
      $ext_f4_b = $img_f4_b-> getClientOriginalExtension();
      if($ext_f4_b != 'jpg' && $ext_f4_b != 'png'){
        return back()->with('erro', 'Erro: Este arquivo não é uma imagem válida! Somente .JPG ou .PNG');
      }
    }

    $edition = Edition::create($request->all());

    //move as imagens
    if(Input::file('img_about')){
      File::move($img_about,public_path().'/images/id_img_about'.$edition->id.'.'.$ext_about);
      $edition->img_about = public_path().'/images/id_img_about'.$edition->id.'.'.$ext_about;
      $edition->save;
    }
    if(Input::file('f1')){
      File::move($f1,public_path().'/images/id_f1'.$edition->id.'.'.$ext_f1);
      $edition->$f1 = public_path().'/images/id_f1'.$edition->id.'.'.$ext_f1;
      $edition->save;
    }
    if(Input::file('f2')){
      File::move($f2,public_path().'/images/id_f2'.$edition->id.'.'.$ext_f2);
      $edition->$f2 = public_path().'/images/id_f2'.$edition->id.'.'.$ext_f2;
      $edition->save;
    }
    if(Input::file('f3')){
      File::move($f3,public_path().'/images/id_f3'.$edition->id.'.'.$ext_f3);
      $edition->$f3 = public_path().'/images/id_f3'.$edition->id.'.'.$ext_f3;
      $edition->save;
    }
    if(Input::file('f4')){
      File::move($f4,public_path().'/images/id_f4'.$edition->id.'.'.$ext_f4);
      $edition->$f4 = public_path().'/images/id_f4'.$edition->id.'.'.$ext_f4;
      $edition->save;
    }
    if(Input::file('f5')){
      File::move($f5,public_path().'/images/id_'.$edition->id.'.'.$ext_f5);
      $edition->$f5 = public_path().'/images/id_'.$edition->id.'.'.$ext_f5;
      $edition->save;
    }
    if(Input::file('f6')){
      File::move($f6,public_path().'/images/id_f5'.$edition->id.'.'.$ext_f6);
      $edition->$f6 = public_path().'/images/id_f5'.$edition->id.'.'.$ext_f6;
      $edition->save;
    }
    if(Input::file('f7')){
      File::move($f7,public_path().'/images/id_f7'.$edition->id.'.'.$ext_f7);
      $edition->$f7 = public_path().'/images/id_f7'.$edition->id.'.'.$ext_f7;
      $edition->save;
    }
    if(Input::file('f8')){
      File::move($f8,public_path().'/images/id_f8'.$edition->id.'.'.$ext_f8);
      $edition->$f8 = public_path().'/images/id_f8'.$edition->id.'.'.$ext_f8;
      $edition->save;
    }
    //----------
    if(Input::file('f1_e')){
      File::move($f1_e,public_path().'/images/id_f1_e'.$edition->id.'.'.$ext_f1_e);
      $edition->f1_e = public_path().'/images/id_f1_e'.$edition->id.'.'.$ext_f1_e;
      $edition->save;
    }
    if(Input::file('f2_e')){
      File::move($f2_e,public_path().'/images/id_f2_e'.$edition->id.'.'.$ext_f2_e);
      $edition->f2_e = public_path().'/images/id_f2_e'.$edition->id.'.'.$ext_f2_e;
      $edition->save;
    }
    if(Input::file('f3_e')){
      File::move($f3_e,public_path().'/images/id_f3_e'.$edition->id.'.'.$ext_f3_e);
      $edition->f3_e = public_path().'/images/id_f3_e'.$edition->id.'.'.$ext_f3_e;
      $edition->save;
    }
    if(Input::file('f4_e')){
      File::move($f4_e,public_path().'/images/id_f4_e'.$edition->id.'.'.$ext_f4_e);
      $edition->f4_e = public_path().'/images/id_f4_e'.$edition->id.'.'.$ext_f4_e;
      $edition->save;
    }
    if(Input::file('f1_b')){
      File::move($f1_b,public_path().'/images/id_f1_b'.$edition->id.'.'.$ext_f1_b);
      $edition->f1_b = public_path().'/images/id_f1_b'.$edition->id.'.'.$ext_f1_b;
      $edition->save;
    }
    if(Input::file('f2_b')){
      File::move($f2_b,public_path().'/images/id_f2_b'.$edition->id.'.'.$ext_f2_b);
      $edition->f2_b = public_path().'/images/id_f2_b'.$edition->id.'.'.$ext_f2_b;
      $edition->save;
    }
    if(Input::file('f3_b')){
      File::move($f3_b,public_path().'/images/id_f3_b'.$edition->id.'.'.$ext_f3_b);
      $edition->f3_b = public_path().'/images/id_f3_b'.$edition->id.'.'.$ext_f3_b;
      $edition->save;
    }
    if(Input::file('f4_b')){
      File::move($f4_b,public_path().'/images/id_f4_b'.$edition->id.'.'.$ext_f4_b);
      $edition->f4_b = public_path().'/images/id_f4_b'.$edition->id.'.'.$ext_f4_b;
      $edition->save;
    }

    Session::flash('mensagem_create', 'Seu site foi atualizado com sucesso!');

    return redirect()->route('editar.index');

  }

  public function destroy($id){

    $edition = Edition::find($id);

    $edition->delete();
    Session::flash('mensagem_del', "Antigas alterações deletadas com Sucesso!");
    return redirect()->route('editar.index');

  }

}

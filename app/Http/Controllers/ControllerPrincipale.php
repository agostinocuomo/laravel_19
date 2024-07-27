<?php

namespace App\Http\Controllers;
 
use App\Models\Article;
use DeepCopy\f001\A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class ControllerPrincipale extends Controller
{
  public function show(Article $article){

    $article= Article::all();
            return view('pages.show', compact('article'));
  }

  public function home(){
    return view('pages.welcome');
}


public function contact(){
    return view('pages.contact');
}



public function create(Request $request, Article $article){
 

 


  $request->validate([
    'titolo'=>'required',
    'descrizione'=>'required',
    'img'=>'required'
  ]);


  $path_image='';
  if($request->hasFile('img') && $request->file('img')->isValid()){
   $path_name = $request->file('img')->getClientOriginalName();
   $path_image = $request->file('img')->storeAs('public/images'. $path_name);
  }

  $article= Article::create([
    "titolo"=>$request->titolo,
    "descrizione"=>$request->descrizione,
    "img"=> $path_image,
]);

return redirect()->route('show')->with('status', 'Buon Fine');
}


public function article(Article $article){


$url=Storage::url($article->img);
  
  return view('pages.article', ['article' => $article], ['url'=>$url]);

}

public function edit( Article $article){
 
  
return view('pages.edit', ['article'=>$article]);

}

public function ButtonUpdate(Category $category){

   return view('pages.add', ['category'=>$category]);

}
}

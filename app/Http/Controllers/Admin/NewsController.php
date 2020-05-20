<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news=News::orderBy('id','desc')->paginate(5);
      // $message = $news ? 'Noticias disponibles' : 'No existen noticias!';
      
     

      return view('admin.news.index',compact('news'));
    }
    public function uindex()
    {
        $news =News::all()->sortBy('created-at');
        
        return view('unews.index', compact('news'));
    }
    public function show($news)
    {
        $news =News::where('id',$news)->first();
        return view('unews.show', compact('news'));
    }

    public function create(){
      // $message = $news ? 'Noticias disponibles' : 'No existen noticias!';
        return view('admin.news.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|unique:news',
            'description'=>'required',
            'content'=>'required',
         ]);
        
        
        if($request->file('image')){
            $file=$request->file('image');
            //$path=Storage::disk('public')->put($request->file('image'));
            $namefi=time().$file->getClientOriginalName();
            $path=public_path().'/imagenes/noticias/';
            $file->move($path,$namefi); 
        }else{
            $namefi=null;
        }
        if($request->file('file')){
            $file=$request->file('file');
            //$path=Storage::disk('public')->put($request->file('image'));
            $nameff=time().$file->getClientOriginalName();
            $path=public_path().'/archivos/noticias/';
            $file->move($path,$nameff);   
        }else{
            $nameff=null;
        }
        $data = [
			'title' 	    => $request->get('title'),
            'content' 	    => $request->get('content'),
			'description' 	=> $request->get('description'),
            'image' 		=> $namefi,
            'file' 		=> $nameff
		];
    	$news = News::create($data);
		$message = $news ? 'Noticia agregado correctamente!' : 'La noticia NO pudo agregarse!';
        return redirect()->route('adm-news')->with('message', $message);
    }
    public function edit(News $news)
    {  
    return view('admin.news.edit', compact( 'news'));
    }
    public function destroy(News $news)
    {
        $deleted = $news->delete();
        $message = $deleted ? 'Noticia eliminado correctamente!' : 'NO se pudo eliminar!';
        return redirect()->route('adm-news')->with('message', $message);
    }

    public function update(News $news, Request $request)
{
    $news->title = $request->get('title');
    $news->description = $request->get('description');
    $news->content = $request->get('content');
    if($request->file('image')){
        $file=$request->file('image');
        //$path=Storage::disk('public')->put($request->file('image'));
        $namefi=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/noticias/';
        $file->move($path,$namefi); 
        $news->image=$namefi;  
    }
    if($request->file('file')){
        $file=$request->file('file');
        //$path=Storage::disk('public')->put($request->file('image'));
        $nameff=time().$file->getClientOriginalName();
        $path=public_path().'/archivos/noticias/';
        $file->move($path,$nameff);   
        $news->file=$nameff;
    }
    $updated = $news->save();
    $message = $updated ? 'Noticia actualizado correctamente!' : 'Noticia NO pudo actualizarse!';
   return redirect()->route('adm-news')->with('message', $message);
}
    

}

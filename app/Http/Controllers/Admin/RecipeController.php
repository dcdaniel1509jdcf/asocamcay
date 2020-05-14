<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipe;

class RecipeController extends Controller
{
    public function index(){
        $recipe=Recipe::orderBy('id','desc')->paginate(5);
        //dd($products);
       // $products=Product::all();
        return view('admin.recipe.index',compact('recipe'));
    }
    public function index2(){
       // $recipe=Recipe::orderBy('id','desc');
        //dd($products);
        $recipe=Recipe::all();
        return view('cook.recipe',compact('recipe'));
    }
    public function create()
    {
        $crecipe = Recipe::orderBy('id', 'asc')->pluck('name', 'id');
        
        return view('admin.recipe.create', compact('crecipe'));
    
    }
    public function show(Recipe $recipe)
    {
        return $recipe;
    }

    public function store(Request $request){
        if($request->file('image')){
            $file=$request->file('image');
            //$path=Storage::disk('public')->put($request->file('image'));
            $name=time().$file->getClientOriginalName();
            $path=public_path().'/imagenes/productos/';
            $file->move($path,$name);        
        }


        $data = [
			'name' 			=> $request->get('name'),
            'image' 		=> $name,
            'ingredients' 	=> $request->get('ingredients'),
			'description' 	=> $request->get('description'),
			'notes' 		=> $request->get('notes')
				
		];
 
	$product = Recipe::create($data);
 
		//$message = $product ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';
        
        return redirect()->route('adm-recipe');//->with('message', $message);

    }



    public function destroy(Recipe $recipe)
{
    $deleted = $recipe->delete();
       
   // $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';
        
    return redirect()->route('adm-recipe');//->with('message', $message);
}


public function edit(Recipe $recipe)
{  
    
    return view('admin.recipe.edit', compact( 'recipe'));
}

public function update(Recipe $recipe, Request $request)
{
    if($request->file('image')){
        $file=$request->file('image');
        //$path=Storage::disk('public')->put($request->file('image'));
        $name=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/productos/';
        $file->move($path,$name); 
        $recipe->image=$name;
    }
    $recipe->name = $request->get('name');
    $recipe->ingredients = $request->get('ingredients');
    $recipe->description = $request->get('description');
    $recipe->notes = $request->get('notes');

      
    

      
    $updated = $recipe->save();
       
    //$message = $updated ? 'Producto actualizado correctamente!' : 'El Producto NO pudo actualizarse!';
        
   return redirect()->route('adm-recipe');//->with('message', $message);
}


}

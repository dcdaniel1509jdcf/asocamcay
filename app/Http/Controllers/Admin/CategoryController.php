<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index', compact('categories'));

    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required|regex:/^[\pL\s\-]+$/u|unique:categories',
           'description'=>'required',
           'color'=>'required', 
        ]);
        $category=Category::create([
            'name'=>$request->get('name'),
            'slug'=>str_slug($request->get('name')),
            'description'=>$request->get('description'),
            'color'=>$request->get('color'),
        ]);
        $message=$category ? 'Categoria agregada' : 'No agregada';
         
        return redirect()->route('category')->with('message',$message);
        
    }
    public function show(Category $category)
    {
        return $category;
    }
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->slug=str_slug($request->get('name'));
        $updated=$category->save();
        return redirect()->route('category');
    }
    public function destroy( $category)
    {
        $deleted=$category->delete();
        $message=$deleted ? 'Categoria eliminada' : 'No se ha podido eliminar';
        return redirect()->route('category')->with('message',$message);
    }
   
    
    
}

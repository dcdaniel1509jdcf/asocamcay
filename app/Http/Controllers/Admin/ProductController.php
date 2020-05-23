<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\UploadedFile;
use App\Category;
use App\Http\Requests\SaveProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products=Product::orderBy('id','desc')->paginate(10);
        //dd($products);
       // $products=Product::all();
        return view('admin.product.index',compact('products'));
    }
    public function create()
    {
        $categories = Category::orderBy('id', 'asc')->pluck('name', 'id');
        
        return view('admin.product.create', compact('categories'));
    
    }
    public function show(Product $product)
    {
        return $product;
    }
    public function store(SaveProductRequest $request){
        if($request->file('image')){
            $file=$request->file('image');
            //$path=Storage::disk('public')->put($request->file('image'));
            $name=time().$file->getClientOriginalName();
            $path=public_path().'/imagenes/productos/';
            $file->move($path,$name);        
        }


        $data = [
			'name' 			=> $request->get('name'),
			'slug' 			=> str_slug($request->get('name')),
			'description' 	=> $request->get('description'),
			'extract' 		=> $request->get('extract'),
			'price' 		=> $request->get('price'),
			'image' 		=> $name,
			'visible' 		=> $request->has('visible') ? 1 : 0,
			'category_id' 	=> $request->get('category_id')
		];
 
	$product = Product::create($data);
 
		$message = $product ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';
        
        return redirect()->route('adm-product')->with('message', $message);

    }
    public function edit(Product $product)
{
    $categories = Category::orderBy('id', 'asc')->pluck('name', 'id');
   //dd($product);   
    
    return view('admin.product.edit', compact('categories', 'product'));
}

public function update(Product $product, Request $request)
{
    $this->validate($request,[
        'name'=>'required|regex:/^[\pL\s\-]+$/u',
        'description'=>'required',
        'extract'=>'required',
        'price'=>'required|numeric',
       
       
     ]);
    $product->name = $request->get('name');
    $product->description = $request->get('description');
    $product->extract = $request->get('extract');
    $product->price = $request->get('price');
    $product->category_id = $request->get('category_id');
    $product->slug = str_slug($request->get('name'));
    $product->visible = $request->has('visible') ? 1 : 0;
    if($request->file('image')){
        $file=$request->file('image');
        //$path=Storage::disk('public')->put($request->file('image'));
        $name=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/productos/';
        $file->move($path,$name); 
        $product->image=$name;       
    }

      
    $updated = $product->save();
       
    //$message = $updated ? 'Producto actualizado correctamente!' : 'El Producto NO pudo actualizarse!';
        
   return redirect()->route('adm-product');//->with('message', $message);
}
public function destroy(Product $product)
{
    $deleted = $product->delete();
       
   $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';
        
    return redirect()->route('adm-product')->with('message', $message);
}
}

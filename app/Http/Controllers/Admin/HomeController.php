<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function indexusr()
    {
        $home=Home::all();
        return view('welcome',compact('home'));
    }
    public function show(Home $home)
    {
        return $home;
    }
    public function edit()
    {  
        $home=Home::all()->first();
      
    return view('admin.homewp.edit', compact( 'home'));
    }
    public function update(Home $home, Request $request)
{
    $this->validate($request,[
        'homecode'=>'required|string|min:5',
        'homedesc'=>'required',
        'hometelf'=>'required|string|min:7',
        'homedir'=>'required',
        'homeemail'=>'required|email',
        
     ]);

    $home->homecode = $request->get('homecode');
    $home->homedesc = $request->get('homedesc');
    $home->hometelf = $request->get('hometelf');
    $home->homedir = $request->get('homedir');
    $home->homeemail = $request->get('homeemail');
    
    if($request->file('homeimg1')){
        $file=$request->file('homeimg1');
        //$path=Storage::disk('public')->put($request->file('image'));
        $namefi=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/home/';
        $file->move($path,$namefi); 
        $home->homeimg1=$namefi;  
    }
    if($request->file('homeimg2')){
        $file=$request->file('homeimg2');
        //$path=Storage::disk('public')->put($request->file('image'));
        $namefi=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/home/';
        $file->move($path,$namefi); 
        $home->homeimg2=$namefi;  
    }
    if($request->file('homeimg3')){
        $file=$request->file('homeimg3');
        //$path=Storage::disk('public')->put($request->file('image'));
        $namefi=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/home/';
        $file->move($path,$namefi); 
        $home->homeimg3=$namefi;  
    }
    if($request->file('homeimg4')){
        $file=$request->file('homeimg4');
        //$path=Storage::disk('public')->put($request->file('image'));
        $namefi=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/home/';
        $file->move($path,$namefi); 
        $home->homeimg4=$namefi;  
    }
    if($request->file('homeimg5')){
        $file=$request->file('homeimg5');
        //$path=Storage::disk('public')->put($request->file('image'));
        $namefi=time().$file->getClientOriginalName();
        $path=public_path().'/imagenes/home/';
        $file->move($path,$namefi); 
        $home->homeimg5=$namefi;  
    }

    
    $updated = $home->save();
    $message = $updated ? 'Pagina Principal actualizada correctamente!' : 'NO pudo actualizarse!';
   return redirect()->route('adm-edit-home')->with('message', $message);

}

}

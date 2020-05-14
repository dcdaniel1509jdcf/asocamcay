<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
   
 
    	
    
    public function edit( $user)
    {
        return view('user.profile', compact('user'));
    }
    public function show(User $user)
        {
            return $user;
        }
    public function update(Request $request,$user)
    {
        //return $request->all();
        
        $this->validate($request, [
            'name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email',
            'password' =>  ($request->get('password') != "") ? 'required|confirmed' : "",
        ]);
        
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->ci = $request->get('ci');
        $user->contact = $request->get('contact');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->notice = $request->has('notice') ? 1: 0;
        if($request->get('password') != "") $user->password = Hash::make($request->get('password'));
        
        $updated = $user->save();
        
      //  $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse!';
        
        return redirect()->route('inicio');//->with('message', $message);
    }
   
}


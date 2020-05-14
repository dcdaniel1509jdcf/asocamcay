<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->paginate(10);
        return view('admin.user.index', compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    	
    public function store(SaveUserRequest $request)
    {
        $data = [
            'name' 			=> $request->get('name'),
            'last_name'     => $request->get('last_name'),
            'ci'     	=> $request->get('ci'),
            'contact'     	=> $request->get('contact'),
            'email'     	=> $request->get('email'),            
            'password' 		=> Hash::make($request->get('password')),
            'type'  		=> $request->get('type'),
            'active' 		=> $request->has('active') ? 1 : 0,
            'address'   	=> $request->get('address'),
            'notice' 		=> $request->has('active') ? 1 : 0
        ];

        $user = User::create($data);

        $message = $user ? 'Usuario agregado correctamente!' : 'El ususario NO pudo agregarse!';
        
        return redirect()->route('adm-user')->with('message', $message);
    }
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
    public function show(User $user)
        {
            return $user;
        }
    public function update(Request $request, User $user)
    {
        //return $request->all();
        
        $this->validate($request, [
            'name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email',
            
            'password' =>  ($request->get('password') != "") ? 'required|confirmed' : "",
            
            'type' => 'required|in:user,admin',
            
        ]);
        
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->ci = $request->get('ci');
        $user->contact = $request->get('contact');
        $user->email = $request->get('email');
        $user->type = $request->get('type');
        $user->address = $request->get('address');
        $user->active = $request->has('active') ? 1 : 0;
        $user->notice = $request->has('notice') ? 1: 0;
        if($request->get('password') != "") $user->password = Hash::make($request->get('password'));
        
        $updated = $user->save();
        
       $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse!';
        
        return redirect()->route('adm-user')->with('message', $message);
    }
    public function destroy(User $user)
    {
        $deleted = $user->delete();
        
       // $message = $deleted ? 'Usuario eliminado correctamente!' : 'El Usuario NO pudo eliminarse!';
        
        return redirect()->route('adm-user');//->with('message', $message);
    }
}

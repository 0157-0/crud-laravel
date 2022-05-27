<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use App\Models\Item;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //aparece todos os usuarios
    public function lista()
    {
       $users = User::get();
      
        return view('user.lista', compact('users'));
    }

   
    //pagina principal
    public function index()
    {
        return view('pag.index');
    }

    //detalhes do usuario
    public function show($id)
    {
       // $user = User::where('id', $id)->first();
       
       if (!$user = User::find($id))
	return redirect()->route('user.login');

    return view('user.show', compact('user'));
        // dd('user.show', $id);
    }

     //pagina login
     public function login()
     {
         return view('user.login');
     }

     //pagina cadastro
     public function cadastro()
     {
         return view('user.cadastro');
     }

     public function store(StoreUpdateUserFormRequest $request)
     {
         $data = $request->all();
         $data['password'] = bcrypt($request->password);

        $user = User::create($data);
     
        return redirect()->route('user.login');
    }

    public function editar($id)
    {
        if (!$user = User::find($id))
	    return redirect()->route('user.login');

    return view('user.editar', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!$user = User::find($id))
	    return redirect()->route('user.login');

        if ($request->name)
            $data['name'] = $request->name;

        if ($request->email)
	        $data['email'] = $request->email;

        if ($request->password)
	        $data['password'] = bcrypt($request->password);

    $user->update($data);

    return redirect()->route('inicio.index');
    }

    public function deletar($id)
    {
     
       if (!$user = User::find($id))
	return redirect()->route('user.login');

    $user->delete();
    return view('pag.index', compact('user'));
        
    }

}

<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
    
class UserController extends Controller
{
    /**
     * Listado.
     *
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Crear usuarios. (devuelve a la vista para crearlos)
     *
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    
    /**
     * Guardar usuarios.
     *
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nickname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','Usuario creado correctamente');
    }
    
    /**
     * Devuelve la vista para mosrtar el usuario especifico
     *
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Devuelve la vista de edición del usuario 
     *
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));

    }
    
    /**
     * Actualiza el usuario
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nickname' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','Usuario modificado correctamente');
    }
    
    /**
     * Elimina al usuario
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Usuario eliminado correctamente');
    }
    

    public function editUser(Request $request) {
        $this->validate($request, [
            'nickname' => 'required',
            'email' => 'required|email'
        ]);

        $data = User::find($request->id);
        $data->nickname=$request->nickname;
        $data->name=$request->name;
        $data->surname=$request->surname;
        $data->email=$request->email;
        $data->save();
        return redirect('/perfil')->with('alert', 'Datos del usuario modificados');
    }

    public function editPass(Request $request) {
        $this->validate($request, [
            'password' => 'required|same:password-confirm'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $data = User::find($request->id);
        $data->password=$input['password'];
        $data->save();
        return redirect('/perfil')->with('alert', 'Datos del usuario modificados');
    }
}
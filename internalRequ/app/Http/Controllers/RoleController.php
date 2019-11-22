<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RoleFormRequest;
use DB;
class RoleController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchTex'));
            $role=DB::table('roles')->where('Name', 'LIKE', '%'.$query.'%')
            //->where('IDsolicitor', '=>', '1')
            ->orderBy('idrole', 'desc')
            ->paginate(7);
            return view('admin.role.rol', ["roles"=>$role, "searchText"=>$query]);
        }
    }
    public function create()
    {
        return view('admin.role.create');
    }
    public function store(RoleFormRequest $request)
    {
        $role= new Role;
        $role->Name=$request->get('Name');
        $role->Description=$request->get('Description');
        $role->save();
        return true;
        //Redirect::to('admin/role');
    }
    public function show($role)
    {
        return view("admin.role.show", ["roles"=>Role::findOrFail($idrole)]);
    }

    public function edit($idrole)
    {
        return view("admin.role.edit", ["roles"=>Role::findOrFail($idrole)]);
    }
    public function update(RoleFormRequest $request, $idrole)
    {
        $role=Role::findOrFail($idrole);
        $role->Name=$request->get('Name');
        $role->Description=$request->get('Description');
        $role->update();
        return Redirect::to('admin/role');
    }
    public function destroy($idrole)
    {
        Role::destroy($idrole);
       // $solicitor->delete();
        return Redirect::to('admin/role');
    }
}

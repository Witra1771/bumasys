<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//use App\Http\Requests\Auth\StoreRoleRequest;
//use App\Http\Requests\Auth\UpdateRoleRequest;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    function __construct()
    {
        //  $this->middleware('permission:view permissions', ['only' => ['index','store']]);
        //  $this->middleware('permission:role-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:role-delete', ['only' => ['destroy']]);
        //  $this->middleware(['auth','verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request): View|Factory|Application
    {
        $roles = Role::orderBy('id', 'DESC')->get();

        return view('auth.roles.index')->with([
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $permissions = Permission::orderBy('name', 'ASC')->get();
        return view('auth.roles.create')->with([
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = [
            'required' => ':attribute harus diisi!',
            'unique' => ':attribute sudah terdaftar!',
        ];
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ], $messages);

        $role = Role::create(['name' => $request->input('name'), 'team_id' => 1]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success','Role Berhasil Ditambahkan!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param int $id
     * @return Factory|View|Application
     */
    public function edit(int $id): Factory|View|Application
    {
        $tittle = 'role';
        $role = Role::find($id);
        $permission = Permission::orderBy('name', 'ASC')->get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('auth.roles.edit',compact('role','permission','rolePermissions', 'tittle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $messages = [
            'required' => ':attribute harus diisi!',
        ];

        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ], $messages);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success','Role Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')->with('success','Role Berhasil Dihapus');
    }
}


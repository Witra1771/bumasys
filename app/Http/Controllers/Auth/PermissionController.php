<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//use App\Http\Requests\Auth\StorePermissionRequest;
//use App\Http\Requests\Auth\UpdatePermissionRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
//use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $tittle = 'Permission';
        $permissions = Permission::orderBy('name', 'ASC')->get();
        return view('auth.permissions.index', compact('tittle', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
         $tittle = 'Tambah Permission';
        return view('auth.permissions.create', compact('tittle'));
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
        ];
        $this->validate($request,[
            'name' => 'required'
        ], $messages);
        Permission::create([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);
        return redirect()->route('permissions.index')->with('success', 'Permission Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id): View|Factory|Application
    {
        $tittle = 'permission';
        $permission = Permission::find($id);
        return view('auth.permissions.edit',compact('permission', 'tittle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id): RedirectResponse
    {
         $messages = [
            'required' => ':attribute harus diisi!',
        ];
        $this->validate($request,[
            'name' => 'required'
        ], $messages);

        Permission::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('permissions.index')->with('success','Permission Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Permission::find($id)->delete();
        return redirect()->route('permissions.index')->with('success','Permission Berhasil Dihapus!');
    }
}

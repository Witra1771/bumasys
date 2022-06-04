<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Permission\StorePermissionRequest;
use App\Http\Requests\Permission\UpdatePermissionRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'Permission';
        $permissions = Permission::orderBy('name', 'ASC')->get();
        return view('auth.permissions.index', compact('tittle', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tittle = 'Tambah Permission';
        return view('auth.permissions.create', compact('tittle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tittle = 'permission';
        $permission = Permission::find($id);
        return view('auth.permissions.edit',compact('permission', 'tittle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect()->route('permissions.index')->with('success','Permission Berhasil Dihapus!');
    }
}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- @can('role-create') --}}
                        <div class="flex mb-2">
                            <a href="{{ route('roles.create') }}">Tambah</a>
                        </div>
                    {{-- @endcan --}}
                    <table id="dataTable" class="stripe hover text-gray-700 text-center" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">Nama</th>
                                <th data-priority="3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td class="flex justify-center">
                                    {{-- @can('role-edit') --}}
                                        <a href="{{ route('roles.edit',$role->id) }}">edit</a>
                                    {{-- @endcan --}}
                                    {{-- @can('role-delete') --}}
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white rounded-full w-16 h-6 text-sm focus:outline-none hover:bg-red-700" onclick="return confirm('Yakin? Data Ini Akan DiHapus?')">
                                                hapus
                                            </button>
                                        </form>
                                    {{-- @endcan --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

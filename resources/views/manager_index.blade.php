@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Manager</th>
                                <th>Nama Manager</th>
                                <th>Nomor Hp</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($manager as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_manager }}</td>
                                <td>{{ $a->nama_manager }}</td>
                                <td>{{ $a->nomor_hp }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td> edit</td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
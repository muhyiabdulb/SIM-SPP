@extends('layouts.master', ['title' => 'Data User'])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data User</h4>
                <div class="card-header-action">
                    <a href={{ route('admin.user.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <p style="text-align:justify;">
                                        @if($user->photo)
                                            <img style="height:300px; width:300px; object-fit:cover; object-position:center;" class="card-img-top rounded-circle mr-1" src="{{ $user->takeImage }}"> <br>
                                        @else
                                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" style="height:300px; width:300px; object-fit:cover; object-position:center;"  class="card-img-top rounded-circle mr-1">
                                        @endif
                                    </p>
                                    
                                </div>
                                <table>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <th>:</th>
                                        <th>{{ $user->siswa['nama_siswa'] }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nama Ortu</th>
                                        <th>:</th>
                                        <th>{{ $user->name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <th>{{ $user->email }}</th>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <th>:</th>
                                        <th>{{ $user->username }}</th>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
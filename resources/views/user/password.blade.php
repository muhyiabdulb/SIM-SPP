@extends('layouts.master', ['title' => 'Ubah Password'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Ubah Password</h4>
                <div class="card-header-action">
                   {{-- <a href={{ route('admin.user.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a> --}}
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('user.profile.updatepassword') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="old_password">Password Lama:</label>
                            <input type="password" name="old_password" id="old_password" class="form-control">
                        </div>
                        @error('old_password')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <div class="form-group">
                            <label for="password">Password Baru:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <div class="form-group">
                            <label for="password_confirmation">Ulangi Password Baru:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
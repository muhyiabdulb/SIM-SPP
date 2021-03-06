@extends('layouts.master', ['title' => 'Tambah Data Via Transfer'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
             <div class="card-header">
                <h4>Tambah Data Via Transfer</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.viatransfer.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.viatransfer.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Nama Bank</label>
                            <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank">
                            @error('nama_bank')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 29px;">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
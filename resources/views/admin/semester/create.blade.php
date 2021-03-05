@extends('layouts.master', ['title' => 'Tambah Data Semester'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Semester</h4>
            </div>
             <div class="card-body">
                <form action="{{ route('admin.jurusan.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Semester</label>
                            <select class="form-control" name="semester" id="semester" placeholder="Semester" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        @error('semester')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contoh2">Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" class="form-control" placeholder="Tahun Ajaran">
                            @error('tahun_ajaran')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                     <div class="form-group col-md-4">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <a href="{{ route('admin.semester.index') }}" class="btn btn-danger" type="reset">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
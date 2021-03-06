@extends('layouts.master', ['title' => 'Edit Data Semester'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Semester</h4>
                <div class="card-header-action">
                <a href={{ route('admin.semester.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.semester.update', $semester->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Semester</label>
                            <select class="form-control" name="semester" value="{{ $semester->semester }}" class="form-control" placeholder="Semester">
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
                            <input type="text" name="tahun_ajaran" value="{{ $semester->tahun_ajaran }}" class="form-control" placeholder="Tahun Ajaran">
                            @error('tahun_ajaran')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                     <div class="form-group col-md-12">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
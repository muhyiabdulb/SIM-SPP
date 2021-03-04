@extends('layouts.master', ['title' => 'Edit Rayon'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Edit Rayon</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
               
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rayon.update', $rayon->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>NAMA RAYON</label>
                        <input type="text" name="nama_rayon" class="form-control" value="{{ $rayon->nama_rayon }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
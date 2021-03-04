@extends('layouts.master', ['title' => 'Tambah Jenis Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Jenis Pembayaran</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Jenis Pembayaran</label>
                           <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contoh2">Nominal</label>
                            <input type="text" class="form-control" placeholder="Nominal">
                        </div>
                     <div class="form-group col-md-4">
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <a href={{ url('jenis_pembayaran') }} class="btn btn-danger" type="reset">Back</a>
                         </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
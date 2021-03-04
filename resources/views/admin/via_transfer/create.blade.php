@extends('layouts.master', ['title' => 'Tambah Via Transfer'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Via Transfer</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Nama Bank</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                     <div class="form-group col-md-4">
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <a href={{ url('via_transfer') }} class="btn btn-danger" type="reset">Back</a>
                         </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
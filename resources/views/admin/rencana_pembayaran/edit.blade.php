@extends('layouts.master', ['title' => 'Edit Data Rencana Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Rencana Pembayaran</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="contoh2">Jenis Pembayaran</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contoh1">Nominal</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contoh1">Banyaknya</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="contoh1">Total Nominal</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contoh1">Tahun</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">submit</button>
                                <a href={{ url('rencana_pembayaran') }} class="btn btn-danger" type="reset">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
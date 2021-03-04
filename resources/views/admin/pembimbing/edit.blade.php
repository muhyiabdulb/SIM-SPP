@extends('layouts.master', ['title' => 'Edit Data Pembimbing Siswa'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Pembimbing Siswa</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="contoh2">NIP</label>
                            <input type="text" class="form-control" placeholder="NIP">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contoh1">Photo</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="contoh1">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="d-block">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineradio1" value="option1">
                                <label class="form-check-label" for="inlineradio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineradio2" value="option2">
                                <label class="form-check-label" for="inlineradio2">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Rayon</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
           <div class="form-group col-md-4">
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <a href={{ url('pembimbing') }} class="btn btn-danger" type="reset">Back</a>
                         </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
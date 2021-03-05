@extends('layouts.master', ['title' => 'Edit Data Semester'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Semester</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Semester</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contoh2">Tahun Ajaran</label>
                            <input type="text" class="form-control" placeholder="Tahun Ajaran">
                        </div>
                     <div class="form-group col-md-4">
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <a href={{ url('semester') }} class="btn btn-danger" type="reset">Back</a>
                         </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
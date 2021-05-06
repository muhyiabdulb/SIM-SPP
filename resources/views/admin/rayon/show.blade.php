
@extends('layouts.master', ['title' => 'Data Rayon'])
@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Rayon</h4>
                <div class="card-header-action">
                    <a href={{ route('admin.rayon.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                            
                                <table>
                                    <tr>
                                        <th>Nama</th>
                                        <th>:</th>
                                        <th>{{ $rayon->nama_rayon }}</th>
                                    </tr>
                                    
                                </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
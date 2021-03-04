@extends('layouts.master', ['title' => 'Data Rayon'])

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Rayon</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.rayon.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NAMA RAYON</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            @foreach($rayons as $rayon)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rayon->nama_rayon }}</td>
                                <td>
                                    <form action="{{ route('admin.rayon.destroy', $rayon->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                          <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button> 
                                          <a href="{{ route('admin.rayon.edit', $rayon->id) }}" class="btn btn-success btn-sm "><i class="fa fa-pen"></i></a>          
                                      </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
                    {{-- {!! $rayons->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
</div>

@endsection
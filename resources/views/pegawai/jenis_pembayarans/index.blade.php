@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jenis_pembayarans.create') }}"> Create New jenis_pembayaran</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Jenis Pembayaran</th>
            <th>Nominal</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jenis_pembayarans as $jenis_pembayaran)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jenis_pembayaran->jenis_pembayaran }}</td>
            <td>{{ $jenis_pembayaran->nominal }}</td>
            <td>
                <form action="{{ route('jenis_pembayarans.destroy',$jenis_pembayaran->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jenis_pembayarans.show',$jenis_pembayaran->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('jenis_pembayarans.edit',$jenis_pembayaran->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jenis_pembayarans->links() !!}
      
@endsection
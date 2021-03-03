@extends('layouts.master', ['title' => 'Dashboard'])

@section('content')
        <section class="section">
            <div class="section-header">
                    @role('kepsek')
                    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
                    @elserole('pegawai')
                    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
                    @elserole('ortu')
                    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
                    @endrole
            </div>
        </section>    
@endsection

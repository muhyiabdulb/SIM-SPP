@extends('layouts.master', ['title' => 'Dashboard'])

@section('content')
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            @role('kepsek')
                <h3 class="page-title">Dashboard Kepala Sekolah</h3>
            @elserole('pegawai')
                <h3 class="page-title">Dashboard Pegawai</h3>
            @elserole('ortu')
                <h3 class="page-title">Dashboard Orang Tua</h3>
            @endrole
            <div class="panel panel-headline">
                <div class="panel-body">
                    @role('kepsek')
                    <h1>Hallo {{ Auth::user()->name }}</h1>
                    @elserole('pegawai')
                    <h1>Hallo {{ Auth::user()->name }}</h1>
                    @elserole('ortu')
                    <h1>Hallo {{ Auth::user()->name }}</h1>
                    @endrole
                    
                    <h3>Selamat bekerja :)</h3>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection

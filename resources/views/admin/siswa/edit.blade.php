@extends('layouts.master', ['title' => 'Edit Data Siswa'])

@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Siswa</h4>
                  <div class="card-header-action">
                   <a href={{ route('admin.siswa.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                  </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="photo">Photo</label>
                            <input id="photo" type="file" name="photo" class="form-control">
                            @error('photo')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="NIS">
                            @error('nis')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh1">Nama Siswa</label>
                            <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" class="form-control" placeholder="Nama Siswa">
                            @error('nama_siswa')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label class="d-block">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input name="jenis_kelamin" class="form-check-input" type="radio" id="inlineradio1" value="L">
                                <label class="form-check-label" for="inlineradio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="jenis_kelamin" class="form-check-input" type="radio" id="inlineradio2" value="P">
                                <label class="form-check-label" for="inlineradio2">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Rombel</label>
                            <select name="rombel_id" class="form-control select2">
                                <option value="{{ $siswa->rombel_id }}">{{ $siswa->rombel->nama_rombel }}</option>
                                 @foreach ($rombels as $item)
                                     <option value="{{ $item->id }}">{{ $item->nama_rombel }}</option>
                                 @endforeach
                             </select>
                             @error('rombel_id')
                                 <div class="invalid">
                                     {{ $message }}
                                 </div>
                             @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Rayon</label>
                            <select name="rayon_id" class="form-control select2">
                                <option value="{{ $siswa->rayon_id }}">{{ $siswa->rayon->nama_rayon }}</option>
                                 @foreach ($rayons as $item)
                                     <option value="{{ $item->id }}">{{ $item->nama_rayon }}</option>
                                 @endforeach
                             </select>
                             @error('rayon_id')
                                 <div class="invalid">
                                     {{ $message }}
                                 </div>
                             @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
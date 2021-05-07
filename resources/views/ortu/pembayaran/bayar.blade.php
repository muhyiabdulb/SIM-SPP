@extends('layouts.master', ['title' => 'Form Bayar'])

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Bayar</h4>
                    <div class="card-header-action">
                        <a href={{ route('ortu.pembayaran.history') }} class="btn btn-danger"><i
                                class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('ortu.pembayaran.store') }}" method="POST" id="dynamic_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Nama Siswa : </h3>
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $siswas->nama_siswa }}</h3>
                            </div>
                        </div>
                        <br>
                        <span id="result"></span>
                        <div class="card border border-primary">
                            <div class="card-body" id="dynamic_field">

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-success btn-block" id="add">Tambah Form
                                            Pembayaran <i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i>
                                            Bayar</button>
                                    </div>
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
            $('.select2', ).select2({
                placeholder: "Pilih Siswa"
            });
        });

        async function transactionEachColumn(index) {
            // Renacana Pembayaran
            let fetchData = await fetch(`{{ route('api.get-jenis-pembayaran') }}`);
            let response = JSON.parse(await fetchData.text());

            let $select2 = $('select[name="transactions[' + index + '][jenis_pembayaran_id]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
            $select2.append($("<option></option>").attr("value", '').text('Pilih Jenis Pembayaran'));
            $.each(response.data, function(key, data) {
                $select2.append($("<option></option>").attr("value", data.id).text(data.jenis_pembayaran));
            });

            // Via Transfer
            let dataBank = await fetch(`{{ route('api.get-via-transfer') }}`);
            let hasil = JSON.parse(await dataBank.text());

            let $selectBank = $('select[name="transactions[' + index + '][via_transfer_id]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
            $selectBank.append($("<option></option>").attr("value", '').text('Pilih Bank'));
            $.each(hasil.data, function(key, data) {
                $selectBank.append($("<option></option>").attr("value", data.id).text(data.nama_bank));
            });

            // Bulan
            let $selectBulan = $('select[name="transactions[' + index + '][bulan]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
            $selectBulan.append($("<option></option>").attr("value", '').text('Pilih Bulan'));
            $selectBulan.append($("<option></option>").attr("value", 'Januari').text('Januari'));
            $selectBulan.append($("<option></option>").attr("value", 'Februari').text('Februari'));
            $selectBulan.append($("<option></option>").attr("value", 'Maret').text('Maret'));
            $selectBulan.append($("<option></option>").attr("value", 'April').text('April'));
            $selectBulan.append($("<option></option>").attr("value", 'Mei').text('Mei'));
            $selectBulan.append($("<option></option>").attr("value", 'Juni').text('Juni'));
            $selectBulan.append($("<option></option>").attr("value", 'Juli').text('Juli'));
            $selectBulan.append($("<option></option>").attr("value", 'Agustus').text('Agustus'));
            $selectBulan.append($("<option></option>").attr("value", 'September').text('September'));
            $selectBulan.append($("<option></option>").attr("value", 'Oktober').text('Oktober'));
            $selectBulan.append($("<option></option>").attr("value", 'November').text('November'));
            $selectBulan.append($("<option></option>").attr("value", 'Desember').text('Desember'));

            // Status
            let $selectStatus = $('select[name="transactions[' + index + '][status]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
            $selectStatus.append($("<option></option>").attr("value", '').text('Pilih Status'));
            $selectStatus.append($("<option></option>").attr("value", 'Belum Bayar').text('Belum Bayar'));
            $selectStatus.append($("<option></option>").attr("value", 'Belum Lunas').text('Belum Lunas'));
            $selectStatus.append($("<option></option>").attr("value", 'Nunggak').text('Nunggak'));
            $selectStatus.append($("<option></option>").attr("value", 'Sudah Lunas').text('Sudah Lunas'));

            // Get nominal
            $select2.on('select2:select', async function(e) {
                let data = e.params.data;

                let fetchData = await fetch(`{{ route('api.get-jenis-pembayaran-object') }}?` +
                    new URLSearchParams(data));
                let response = JSON.parse(await fetchData.text());

                $('input[name="transactions[' + index + '][nominal]"]').val(response.data.nominal)
            }).trigger('change')

            // Sum of nominal and bayar
            $('input[name="transactions[' + index + '][bayar]"]').keyup(function(e) {
                let bayar = $(this).val();
                let nominal = $('input[name="transactions[' + index + '][nominal]"]').val();

                let sisa_pembayaran = nominal - bayar;
                $('input[name="transactions[' + index + '][sisa_pembayaran]"]').val(sisa_pembayaran);

                let sub_bayar = bayar;
                $('input[name="transactions[' + index + '][sub_bayar]"]').val(sub_bayar);
            })

        }

        $(document).ready(function() {
            getNumberOfTr();

            $('#add').click(function() {
                let index = $('#dynamic_field .rowComponent').length
                $('#dynamic_field').append(
                    `<div class="rowComponent container mb-3">
                    <input type="hidden" width="10px" name="transactions[${index}][id]" value="${undefined}">
                    <div class="no row mb-3">
                        <div class="col-md-3">
                            <h4 class="text-dark">Form Ke - </h4>
                        </div>
                        <div class="col-md-9">
                            <input type="text" value="${index + 1}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="text-dark">Via Transfer</label>
                            <select name="transactions[${index}][via_transfer_id]" class="form-control select-${index}" required></select>
                        </div>
                        <div class="col-md-6">
                            <label class="text-dark">Tanggal Bayar</label>
                            <input type="date" name="transactions[${index}][tanggal_transfer]" class="form-control" required>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="text-dark">Pilih Bulan</label>
                            <select name="transactions[${index}][bulan]" class="form-control select-${index}" required></select>
                            
                        </div>
                        <div class="col-md-6">
                            <label class="text-dark">Pilih Jenis Pemabayaran</label>
                            <select name="transactions[${index}][jenis_pembayaran_id]" class="form-control select-${index}" required></select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="text-dark">Nominal</label>
                            <input type="number" name="transactions[${index}][nominal]" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="text-dark">Bayar</label>
                            <input type="number" name="transactions[${index}][bayar]" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="text-dark">Sisa Pembayaran</label>
                            <input type="text" name="transactions[${index}][sisa_pembayaran]" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="text-dark">Sub Bayar</label>
                            <input type="text" name="transactions[${index}][sub_bayar]" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label class="text-dark">Pilih Status</label>
                            <select name="transactions[${index}][status]" class="form-control select-${index}" required></select>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <button type="text" name="remove" class="btn btn-danger text-white btn_remove">Hapus Form Pembayaran ? <i class="fa fa-trash"></i></button>
                    </div>
                    <hr class="border border-primary">
                </div>`
                );

                transactionEachColumn(index)
            });

            $(document).on('click', '.btn_remove', function() {
                let parent = $(this).parent();
                let id = parent.data('id');

                let delete_data = $("input[name='delete_data']").val();
                if (id !== 'undefined' && id !== undefined) {
                    $("input[name='delete_data']").val(delete_data + ';' + id);
                }

                $('.btn_remove').eq($('.btn_remove').index(this)).parent().parent().remove();
                getNumberOfTr()
            });

        });

        function getNumberOfTr() {
            $('#dynamic_field .rowComponent').each(function(index, div) {
                $(this).find("div.no input").val(index + 1)
            });
        }

    </script>
@endsection

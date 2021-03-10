@extends('layouts.master', ['title' => 'Form Bayar'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Form Bayar</h4>
                <div class="card-header-action">
                   <a href={{ route('pegawai.pembayaran.history') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            
            <div class="card-body">
                <form action="{{ route('pegawai.pembayaran.store') }}" method="POST" id="dynamic_form">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Nama Siswa</h4>
                        </div>
                        <div class="col-md-10">
                            <select name="siswa_id" id="siswa_id" class="form-control select2 mb-2 @error('siswa_id') is-invalid @enderror">
                                <option selected disabled>Pilih Siswa</option>
                                @foreach($siswas as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_siswa }}</option>
                                @endforeach
                            </select>
                            @error('siswa_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <span id="result"></span>
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Via Transfer</th>
                                <th>Kategori Bayar</th>
                                <th>Tanggal Transfer</th>
                                <th>Nominal</th>
                                <th>Bayar</th>
                                <th>Sisa</th>
                                <th>Sub Bayar</th>
                                <th>Status</th>
                                <th>
                                    <button type="button" class="btn btn-success btn-sm" id="add"><i class="fa fa-plus"></i></button>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="dynamic_field">

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="10">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save"></i> Bayar</button>
                                </td>
                            </tr>
                        </tfoot>
                   </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.select2',).select2({
            placeholder: "Pilih Siswa"
        });
    });

    async function transactionEachColumn(index) {
        // Renacana Pembayaran
        let fetchData = await fetch(`{{ route('api.get-jenis-pembayaran') }}`);
        let response = JSON.parse(await fetchData.text());

        let $select2 = $('select[name="transactions[' + index+'][jenis_pembayaran_id]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
        $select2.append($("<option></option>").attr("value", '').text('Pilih Jenis Pembayaran'));
        $.each(response.data, function(key, data){
            $select2.append($("<option></option>").attr("value", data.id).text(data.jenis_pembayaran));
        });

        // Via Transfer
        let dataBank = await fetch(`{{ route('api.get-via-transfer') }}`);
        let hasil = JSON.parse(await dataBank.text());

        let $selectBank = $('select[name="transactions[' + index+'][via_transfer_id]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
        $selectBank.append($("<option></option>").attr("value", '').text('Pilih Bank'));
        $.each(hasil.data, function(key, data){
            $selectBank.append($("<option></option>").attr("value", data.id).text(data.nama_bank));
        });

        // Status
        let $selectStatus = $('select[name="transactions[' + index+'][status]"]').select2({
                theme: "classic",
                width: '100%'
            }).empty();
        $selectStatus.append($("<option></option>").attr("value", '').text('Pilih Status'));
        $selectStatus.append($("<option></option>").attr("value", 'Belum Bayar').text('Belum Bayar'));
        $selectStatus.append($("<option></option>").attr("value", 'Belum Lunas').text('Belum Lunas'));
        $selectStatus.append($("<option></option>").attr("value", 'Nunggak').text('Nunggak'));
        $selectStatus.append($("<option></option>").attr("value", 'Sudah Bayar').text('Sudah Bayar'));
        $selectStatus.append($("<option></option>").attr("value", 'Sudah DiVerifikasi').text('Sudah DiVerifikasi'));

        // Get nominal
        $select2.on('select2:select', async function(e) {
            let data = e.params.data;

            let fetchData = await fetch(`{{ route('api.get-jenis-pembayaran-object') }}?` + new URLSearchParams(data));
            let response = JSON.parse(await fetchData.text());

            $('input[name="transactions[' + index + '][nominal]"]').val(response.data.nominal)
        }).trigger('change')

        // Sum of nominal and bayar
        $('input[name="transactions[' + index + '][bayar]"]').keyup(function(e){
            let bayar = $(this).val();
            let nominal = $('input[name="transactions[' + index + '][nominal]"]').val();

            let sisa_pembayaran = nominal - bayar;
            $('input[name="transactions[' + index + '][sisa_pembayaran]"]').val(sisa_pembayaran);

            let sub_bayar = bayar;
            $('input[name="transactions[' + index + '][sub_bayar]"]').val(sub_bayar);
        })

    }

    $(document).ready(function(){
        getNumberOfTr();

        $('#add').click(function(){
            let index = $('#dynamic_field tr').length
            $('#dynamic_field').append(
                `<tr class="rowComponent">
                    <input type="hidden" width="10px" name="transactions[${index}][id]" value="${undefined}">
                    <td class="no">
                        <input type="text" value="${index + 1}" class="form-control" disabled>
                    </td>
                    <td>
                        <select name="transactions[${index}][via_transfer_id]" class="form-control select-${index}" required></select>
                    </td>
                    <td>
                        <select name="transactions[${index}][jenis_pembayaran_id]" class="form-control select-${index}" required></select>
                    </td>
                    <td>
                        <input type="date" name="transactions[${index}][tanggal_transfer]" class="form-control" required>
                    </td>
                    <td>
                        <input type="number" name="transactions[${index}][nominal]" class="form-control" readonly>
                    </td>
                    <td>
                        <input type="number" name="transactions[${index}][bayar]" class="form-control" required>
                    </td>
                    <td>
                        <input type="text" name="transactions[${index}][sisa_pembayaran]" class="form-control" readonly>
                    </td>
                    <td>
                        <input type="text" name="transactions[${index}][sub_bayar]" class="form-control" readonly>
                    </td>
                    <td>
                        <select name="transactions[${index}][status]" class="form-control select-${index}" required></select>
                    </td>
                    <td>
                        <button type="text" name="remove" class="btn btn-danger btn-sm text-white btn_remove"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>`
            );

            transactionEachColumn(index)
        });

        $(document).on('click', '.btn_remove', function() {
            let parent = $(this).parent();
            let id = parent.data('id');

            let delete_data = $("input[name='delete_data']").val();
            if(id !== 'undefined' && id !== undefined) {
                $("input[name='delete_data']").val(delete_data + ';' + id);
            }

            $('.btn_remove').eq($('.btn_remove').index(this)).parent().parent().remove();
            getNumberOfTr()
        });
        
    });

    function getNumberOfTr() {
        $('#dynamic_field tr').each(function(index, tr) {
            $(this).find("td.no input").val(index + 1)
        });
    }

</script>
@endsection
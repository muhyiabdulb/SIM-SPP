@extends('layouts.master', ['title' => 'Tambah Data Rencana Pembayaran'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Rencana Pembayaran</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.rencanapembayaran.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rencanapembayaran.store') }}" method="POST" id="dynamic_form">
                    @csrf
                    <span id="result"></span>
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Jenis Pembayaran</th>
                                <th>Nominal</th>
                                <th>Banyaknya (dalam 1 thn)</th>
                                <th>Total Nominal</th>
                                <th>Tahun</th>
                                <th>
                                    <button type="button" class="btn btn-success" id="add"><i class="fa fa-plus"></i></button>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="dynamic_field">

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-save"></i> Save</button>
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
            placeholder: "Choose Member"
        });
    });

    async function transactionEachColumn(index) {
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

        // Get nominal
        $select2.on('select2:select', async function(e) {
            let data = e.params.data;

            let fetchData = await fetch(`{{ route('api.get-jenis-pembayaran-object') }}?` + new URLSearchParams(data));
            let response = JSON.parse(await fetchData.text());

            $('input[name="transactions[' + index + '][nominal]"]').val(response.data.nominal)
        }).trigger('change')

        // Sum of nominal and banyaknya
        $('input[name="transactions[' + index + '][banyaknya]"]').keyup(function(e){
            let banyaknya = $(this).val();
            let nominal = $('input[name="transactions[' + index + '][nominal]"]').val();

            let total_nominal = nominal * banyaknya;
            $('input[name="transactions[' + index + '][total_nominal]"]').val(total_nominal);
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
                        <select name="transactions[${index}][jenis_pembayaran_id]" class="form-control select-${index}" required></select>
                    </td>
                    <td>
                        <input type="number" name="transactions[${index}][nominal]" class="form-control" readonly>
                    </td>
                    <td>
                        <input type="number" name="transactions[${index}][banyaknya]" class="form-control" required>
                    </td>
                    <td>
                        <input type="number" name="transactions[${index}][total_nominal]" class="form-control" readonly>
                    </td>
                    <td>
                        <input type="text" name="transactions[${index}][tahun]" class="form-control" required>
                    </td>
                    <td>
                        <button type="text" name="remove" class="btn btn-danger text-white btn_remove"><i class="fa fa-trash"></i></button>
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
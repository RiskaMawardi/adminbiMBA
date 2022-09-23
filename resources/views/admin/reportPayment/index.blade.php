@extends('layouts.master')
@section('dash')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Report payment table</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="data-document" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Bayar</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Waktu Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    @foreach($data as $data)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->jenis_bayar}}</td>
                                        <td>{{$data->keterangan}}</td>
                                        <td>{{$data->jml_bayar}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning mr-1">Edit Data</i></a>
                                            <a href="" class="btn btn-danger mr-1">Hapus Data</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#data-document').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
        ]
        });
    });
</script>
@endsection

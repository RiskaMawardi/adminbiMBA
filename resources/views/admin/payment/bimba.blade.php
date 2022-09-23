@extends('layouts.master');
@section('bimba')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Pembayaran</h4>
                    <p class="card-description">
                        Isilah data dibawah dnegan teliti!
                    </p>
                    <form class="forms-sample" action="{{route('createPayment')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder="Masukkan Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Jenis Pembayaran</label>
                            <div>
                                <select class="form-control" name="jenis_bayar">
                                    <option>SPP biMBA</option>
                                    <option>SPP Tahfiz</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jumlah Bayar</label>
                            <input type="number" class="form-control" id="exampleInputPassword1"
                                placeholder="Jumlah Bayar" name="jml_bayar">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

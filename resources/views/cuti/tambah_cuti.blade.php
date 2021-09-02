@extends('layouts.layout')
@section('content')
<div class="container-fluid">    
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top:7%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Edit Data Karyawan</h1>
        </div>
        <form action="/store_cuti" method="POST" class="was-validated">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nomomr_induk">Nomor Induk :</label>
                <input type="text" class="form-control" id="nomomr_induk"  name="nomor_induk" required>
            </div>
            <div class="form-group">
                <label for="t_cuti">Tanggal Cuti :</label>
                <input type="date" class="form-control" id="t_cuti" name="t_cuti" required>
            </div>
            <div class="form-group">
                <label for="lama_cuti">Lama Cuti :</label>
                <input type="text" class="form-control" id="lama_cuti"  name="lama_cuti" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop

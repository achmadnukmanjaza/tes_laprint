@extends('layouts.layout')
@section('content')
<div class="container-fluid">    
    <div class="row" style="padding-left: 5%; padding-right: 5%; padding-top:7%; padding-bottom: 3%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Edit Data Karyawan</h1>
        </div>
        <form action="/update_karyawan/{{$karyawan->no}}" method="POST" class="was-validated">
            {{csrf_field()}}  
            <div class="form-group">
                <label for="no">No :</label>
                <input type="number" class="form-control" id="no" value="{{$karyawan->no}}" name="no" required>
            </div>
            <div class="form-group">
                <label for="nomor_induk">Nomor Induk :</label>
                <input type="text" class="form-control" id="nomor_induk" value="{{$karyawan->nomor_induk}}" name="nomor_induk" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" value="{{$karyawan->nama}}" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea class="form-control" id="alamat" name="alamat" required>{{$karyawan->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Lahir :</label>
                <input type="date" class="form-control" id="t_lahir" value="{{$karyawan->t_lahir}}" name="t_lahir" required>
            </div>
            <div class="form-group">
                <label for="t_bergabung">Tanggal Bergabung :</label>
                <input type="date" class="form-control" id="t_bergabung" value="{{$karyawan->t_bergabung}}" name="t_bergabung" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop

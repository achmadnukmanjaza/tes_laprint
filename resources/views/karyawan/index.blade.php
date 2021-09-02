@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row text-center" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Data Karyawan</h1><br>
            <a href="/tambah_karyawan"><button class="btn btn-primary">Tambah Data Karyawan</button></a>
            <a href="/data_terbaru"><button class="btn btn-primary">Data Terbaru Karyawan</button></a>       
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-hover" style="padding-bottom: 3%;">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th align="center" style="color: black; font-size: 20px;"><b>No</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Nomor Induk</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Nama</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Alamat</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Tanggal Lahir</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Tanggal Bergabung</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Aksi</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($karyawan as $karyawan)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$karyawan->no}}</td>
                        <td style="color: black; font-size: 15px;">{{$karyawan->nomor_induk}}</td>
                        <td style="color: black; font-size: 15px;">{{$karyawan->nama}}</td>
                        <td style="color: black; font-size: 15px;">{{$karyawan->alamat}}</td>
                        <td style="color: black; font-size: 15px;">{{$karyawan->t_lahir}}</td>
                        <td style="color: black; font-size: 15px;">{{$karyawan->t_bergabung}}</td>
                        <td style="color: black; font-size: 15px;">
                            <a href="/edit_karyawan/{{$karyawan->no}}">Edit</a>
                            <a href="/hapus_karyawan/{{$karyawan->no}}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
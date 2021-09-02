@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row text-center" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Data Cuti Karyawan</h1><br>
            <a href="/tambah_cuti"><button class="btn btn-primary">Tambah Cuti Karyawan</button></a>       
            <a href="/data_cuti"><button class="btn btn-primary">Data Cuti Karyawan Lebih Dari 1</button></a>       
            <a href="/sisa_cuti"><button class="btn btn-primary">Sisa Cuti Karyawan</button></a>       
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-hover" style="padding-bottom: 3%;">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th align="center" style="color: black; font-size: 20px;"><b>Nomor Induk</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Tanggal Cuti</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Lama Cuti</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Keterangan</b></th>
                        <th align="center" style="color: black; font-size: 20px;"><b>Aksi</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cuti as $cuti)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$cuti->nomor_induk}}</td>
                        <td style="color: black; font-size: 15px;">{{$cuti->t_cuti}}</td>
                        <td style="color: black; font-size: 15px;">{{$cuti->lama_cuti}}</td>
                        <td style="color: black; font-size: 15px;">{{$cuti->keterangan}}</td>
                        <td style="color: black; font-size: 15px;">
                            <a href="/edit_cuti/{{$cuti->id}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
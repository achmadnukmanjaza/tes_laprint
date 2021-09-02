@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row text-center" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Data Cuti Karyawan Lebih Dari 1</h1><br>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_cuti as $data_cuti)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$data_cuti->nomor_induk}}</td>
                        <td style="color: black; font-size: 15px;">{{$data_cuti->t_cuti}}</td>
                        <td style="color: black; font-size: 15px;">{{$data_cuti->lama_cuti}}</td>
                        <td style="color: black; font-size: 15px;">{{$data_cuti->keterangan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row text-center" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="col-md">
            <h1 style="color: #E8410E; font-weight: bold; font-size: 35px;">Data Terbaru Karyawan</h1><br>     
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($terbaru as $terbaru)
                    <tr>
                        <td style="color: black; font-size: 15px;">{{$terbaru->no}}</td>
                        <td style="color: black; font-size: 15px;">{{$terbaru->nomor_induk}}</td>
                        <td style="color: black; font-size: 15px;">{{$terbaru->nama}}</td>
                        <td style="color: black; font-size: 15px;">{{$terbaru->alamat}}</td>
                        <td style="color: black; font-size: 15px;">{{$terbaru->t_lahir}}</td>
                        <td style="color: black; font-size: 15px;">{{$terbaru->t_bergabung}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
@extends('layout.admin.layout')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <div class="container m-2">
        <div class="row">
            <div class="col-5 mb-4" style="background-color:#0077C2;" id="title-tambah">
                <p class="pt-1 text-white">Selamat Datang Di Halaman Admin</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-white">
                <div class="row">
                    <div class="col-12">
                       <div class=""  style="background-color: #0077C2;border-radius:12px   ">
                <div class="">
                    <p style="font-size: 24px;padding:10px">Jumlah Penduduk</p>
                </div>

                <div class="">
                    <p style="font-size: 26px;font-weight:bold;padding:10px">
                        670 Jiwa
                    </p>
                </div>
                </div>
                    </div>
                </div>
             

            </div>
            <div class="col-7">
                @include('admin.calender')
            </div>
        </div>
        <div class="row"></div>
    </div>

    @endsection

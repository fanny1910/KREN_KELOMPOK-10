@extends('layout.admin.layout')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <div class="container m-2">
        <div class="row">
            <div class="col-5 mb-4" style="background-color:#0077C2;" id="title-tambah">
                <p class="pt-1 text-white">Selamat Datang Di Fitur Layanan </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3 text-center">
            <a href="/admin/dashboard/fitur/umum">
                <div class="card">
                <div class="card-body">
                    <p style="font-size: 24px;font-weight:bold">Fitur Layanan</p>
                    <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                        Umum
                    </div>
                    <p>17 Layanan</p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-3 text-center">
            <a href="">
                <div class="card">
                <div class="card-body">
                    <p style="font-size: 24px;font-weight:bold">Fitur Layanan</p>
                    <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                        Usaha
                    </div>
                    <p>10 Layanan </p>
                </div>
            </div>
            </a>

        </div>
        <div class="col-3 text-center">
            <a href="">
                 <div class="card">
                <div class="card-body">
                    <p style="font-size: 24px;font-weight:bold">Fitur Layanan</p>
                    <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                        Pernikahan
                    </div>
                    <p>12 layanan  </p>
                </div>
            </div>
            </a>

        </div>
        <div class="col-3 text-center">
            <a href="">
                <div class="card">
                <div class="card-body">
                    <p style="font-size: 24px;font-weight:bold">Fitur Layanan</p>
                    <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                        Pertanahan
                    </div>
                    <p>5 Layanan</p>
                </div>
            </div>
            </a>

        </div>

    </div>


@endsection

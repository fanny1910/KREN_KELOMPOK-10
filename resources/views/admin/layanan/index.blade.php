@extends('layout.admin.layout')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <div class="container m-2">
        <div class="row">
            <div class="col-5 mb-4" style="background-color:#0077C2;" id="title-tambah">
                <p class="pt-1 text-white">Selamat Datang Di Layanan Masyarakat Admin</p>
            </div>
        </div>

        <div class="row">
            <div class="col-3 text-center">
                <a href="/admin/dashboard/layanan/umum">
                    <div class="card">
                    <div class="card-body">
                        <p style="font-size: 24px;font-weight:bold">Layanan</p>
                        <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                            Umum
                        </div>
                        <p>45 Surat Masuk   </p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="">
                    <div class="card">
                    <div class="card-body">
                        <p style="font-size: 24px;font-weight:bold">Layanan</p>
                        <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                            Usaha
                        </div>
                        <p>45 Surat Masuk   </p>
                    </div>
                </div>
                </a>

            </div>
            <div class="col-3 text-center">
                <a href="">
                     <div class="card">
                    <div class="card-body">
                        <p style="font-size: 24px;font-weight:bold">Layanan</p>
                        <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                            Pernikahan
                        </div>
                        <p>45 Surat Masuk   </p>
                    </div>
                </div>
                </a>

            </div>
            <div class="col-3 text-center">
                <a href="">
                    <div class="card">
                    <div class="card-body">
                        <p style="font-size: 24px;font-weight:bold">Layanan</p>
                        <div class="text-white " style="background-color: #0077C2;padding:10px;border-radius:25px">
                            Pertanahan
                        </div>
                        <p>45 Surat Masuk   </p>
                    </div>
                </div>
                </a>

            </div>

        </div>
    </div>


@endsection

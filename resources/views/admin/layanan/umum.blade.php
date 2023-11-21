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
            <div class="col-12">
                <table class="table table-bordered data-table" id="myTable">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Surat</th>
                        <th>Keterangan</th>
                        <th>Alamat</th>
                        <th>Status Surat</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Edwrad Tua Panjaitan</td>
                            <td>114210010291</td>
                            <td>Usaha</td>
                            <td>Keperluan untuk ..</td>
                            <td>Pagaran</td>
                            <td>
                                <div class=" ">
                                    <button class="uk-button uk-button-default text-white" type="button" style="background-color: #0077C2">Tindakan</button>
                                    <div uk-dropdown="pos: bottom-left; boundary: !.boundary; shift: false; flip: false">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li class="uk-active"><a href="" style="color: #0077C2">Lihat Detail</a></li>
                                            <li><a href="#" style="color: #14B065">Terima</a></li>
                                            <li><a href="#" style="color: red">Tolak</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

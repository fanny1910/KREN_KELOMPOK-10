@extends('layout.admin.layout')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <div class="container m-2">
        <div class="row">
            <div class="col-5 mb-4" style="background-color:#0077C2;" id="title-tambah">
                <p class="pt-1 text-white">Data Penduduk Desa Lumban Ruhap</p>
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="row">
                    <div class="col-4 mb-4">
                        <a href="/admin/dashboard/tambah-penduduk" id="data-baru">
                            Tambah Data Penduduk
                        <span class="icon">
                          <b><ion-icon name="add-outline"></ion-icon></b>
                        </span></a>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-bordered data-table" id="myTable">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Tindakan</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Edwrad Tua Panjaitan</td>
                                <td>114210010291</td>
                                <td>laki-laki</td>
                                <td>Khatolik</td>
                                <td>seyufgouyegflkjgoseygroi</td>
                                <td>
                                    <div class=" ">
                                        <button class="uk-button uk-button-default text-white" type="button" style="background-color: #0077C2">Tindakan</button>
                                        <div uk-dropdown="pos: bottom-left; boundary: !.boundary; shift: false; flip: false">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="/admin/dashboard/ubah-penduduk" style="color: #0077C2">Ubah</a></li>
                                                <li><a href="#" style="color: red">Hapus</a></li>

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
    </div>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

@endsection
@push('myscript')
    <script>
         $(document).ready(function() {
            $('#data').DataTable({
                scrollX: true,
            });
        });
    </script>
@endpush

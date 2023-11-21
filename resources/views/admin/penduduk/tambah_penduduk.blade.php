@extends('layout.admin.layout')

@section('content')

    <div class="m-2">

    <div class=" container row text-white">
        <div class="row">
            <div class="col-5 mb-4" style="background-color:#0077C2;" id="title-tambah">
                <p class="pt-1">Tambah Data Penduduk</p>
            </div>
        </div>
        {{-- style="background-color:#0077C2;margin-left:10px;margin-right:10px" --}}
        <div class="col-12" style="background-color:#0077C2;" id="box-form">
            <form action="" id="form">
                <div class="row">
                    <div class="col-6">
                        <div class="form-input">
                        <div class="label">
                        <label for="">
                            Nama
                        </label>
                       </div>
                        <input type="text" name="nama" id="input">
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                NIK
                            </label>
                           </div>
                            <input type="text" name="nik" id="input">
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                Agama
                            </label>
                           </div>
                           <select name="agama" id="input">
                            <option value="#">--Pilih Agama--</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Islam">Islam</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                          </select>
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">Jenis Kelamin</label></div>
                            <input type="radio" id="input1" name="jenis_kelamin" value="laki-laki">  <label for="A">Laki-laki</label>

                            <input type="radio" id="input1" name="jenis_kelamin" value="perempuan">   <label for="B">Perempuan</label>

                         </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                Tempat Lahir
                            </label>
                           </div>
                            <input type="text" name="tempat_lahir" id="input">
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                Tanggal Lahir
                            </label>
                           </div>
                            <input type="date" name="tanggal_lahir" id="input">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                Status Perkawinan
                            </label>
                           </div>
                           <select name="status_perkawinan" id="input">
                            <option value="belum kawin">Belum Kawin</option>
                            <option value="kawin">Kawin</option>
                            <option value="cerai hidup">Cerai Hidup</option>
                            <option value="cerai mati">Cerai Mati</option>
                          </select>
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                Alamat
                            </label>
                           </div>
                            <input type="text" name="alamat" id="input">
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">
                                Kewarganegaraan
                            </label>
                           </div>
                           <select name="kewarganegaraan" id="input">
                            <option value="#">--Pilih Kewarganegaraan--</option>

                            <option value="wni">Warga Negara Indonesia</option>
                            <option value="wna">Warga Negara Asing</option>
                          </select>
                        </div>
                        <div class="form-input">
                            <div class="label">
                            <label for="">Golongan Darah</label></div>

                            <input type="radio" id="input1" name="golongan_darah" value="A">  <label for="A">A</label>

                            <input type="radio" id="input1" name="golongan_darah" value="B">   <label for="B">B</label>

                            <input type="radio" id="input1" name="golongan_darah" value="AB">   <label for="AB">AB</label>

                            <input type="radio" id="input1" name="golongan_darah" value="O">  <label for="O">O</label>

                        </div>
                        <div class="form-input" id="box-tambah">
                            <div class="" id="grp-btn">
                            <button type="submit" id="btn-tambah" class="shadow">
                                Tambah penduduk
                            </button>
                            </div>
                            <p class="text-center" id="iup">* Pastikan data telah terisi dengan benar *</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

@endsection

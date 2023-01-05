@extends('layouts.app')

@section('content')
    <div class="mt-2 p-4 ">
        
            <div class="row">
                <div class="d-flex align-items-start">
                    {{-- Side Nav Bar --}}
                        <div class=" p-1 col-2 nav flex-column nav-pills me-3 min-vh-100  rounded shadow bg-body align-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link shadow active  mt-4 w-75" id="v-pills-user-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user" type="button" role="tab" aria-controls="v-pills-user" aria-selected="true">Pengguna</button>
                            <button class="nav-link shadow  mt-4 w-75" id="v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">Pengguna Baru</button>
                            <button class="nav-link shadow mt-4 w-75" id="v-pills-category-tab" data-bs-toggle="pill" data-bs-target="#v-pills-category" type="button" role="tab" aria-controls="v-pills-category">Kategori kendaraan</button>
                            <button class="nav-link shadow mt-4 w-75" id="v-pills-service-tab" data-bs-toggle="pill" data-bs-target="#v-pills-service" type="button" role="tab" aria-controls="v-pills-service">Perawatan</button>
                        </div>

                        <div class="rounded shadow bg-body align-content-center tab-content col-10 p-4 vh-100 overflow-scroll" id="v-pills-tabContent">
                    {{-- Service-Delete Modal --}}
                        <div class="modal fade" id="service_delete_modal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
                                <div class="modal-content p-4">

                                    <div class="modal-header">
                                        <h3 class="text-center">Hapus Jenis Pemeliharaan</h3>
                                    </div>

                                    <div class="modal-body">
                                        Menghapus jenis pemeliharaan ini akan menghapus semua catatan pemeliharaan yang menggunakan jenis pemeliharaan ini
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">Konfirmasi</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                    {{-- Service Edit Modal --}}
                        <div class="modal fade" id="service_edit_modal" tabindex="-1" aria-labelledby="editServiceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
                                <div class="modal-content p-4">
                                    <div class="modal-header">
                                        <h3 class="text-center">Mengubah Jenis Pemeliharaan</h3>
                                    </div>

                                    <div class="modal-body">
                                        <div class="col-10 offset-1">
                                            <input type="text" value="" class="form-control" id="service_edit_input">
                                        </div>
                                        Mengubah nama jenis pemeliharaan akan mengubah seluruh jenis pemeliharaan yang ada di catatan pemeliharaan
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-warning" type="submit">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- Edit Modal --}}
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class=" modal-dialog  modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Ubah Data</span></h5>
                                        <input type="hidden" class="d-none" id="user_id_value_edit" value="">
                                        <button type="button" class="btn-close" data-bs-dismiss='modal' aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="alert alert-success" id="success-edit-alert">
                                            <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                                            <strong>Sukses </strong> Mengubah Data.
                                        </div>

                                        <div class="card mb-2">
                                                <div class="card-header">
                                                Data Kendaraan
                                                </div>
                                                <div class="card-body row">
                                                    <div class="col">

                                                        <div class="row mb-1">
                                                            <label for="nomor_registrasi_edit" class="col-3 col-form-label">Nomor Registrasi</label>
                                                            <div class="col-4">
                                                                <input type="text" id="nomor_registrasi_edit" name="nomor_registrasi_edit" class="form-control">
                                                                <ul class="list-unstyled" id="nomor_registrasi_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="nama_pemilik_edit" class="col-3 col-form-label">Nama Pemilik</label>
                                                            <div class="col-4">
                                                                <input type="text" id="nama_pemilik_edit" name="nama_pemilik_edit" class="form-control">
                                                                <ul class="list-unstyled" id="nama_pemilik_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="alamat_edit" class="col-3 col-form-label">Alamat</label>
                                                            <div class="col-4">
                                                                <input type="text"  id="alamat_edit" name="alamat_edit" class="form-control">
                                                                <ul class="list-unstyled" id="alamat_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="merk_edit" class="col-3 col-form-label">Merek</label>
                                                            <div class="col-4">
                                                                <input type="text"  id="merk_edit" name="merk_edit" class="form-control">
                                                                <ul class="list-unstyled" id="merk_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="tipe_edit" class="col-3 col-form-label">Tipe</label>
                                                            <div class="col-4">
                                                                <input type="text"  id="tipe_edit" name="tipe_edit" class="form-control">
                                                                <ul class="list-unstyled" id="tipe_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="jenis_edit" class="col-3 col-form-label">Jenis</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="jenis_edit" name="jenis_edit" class="form-control">
                                                                <ul class="list-unstyled" id="jenis_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="model_edit" class="col-3 col-form-label">Model</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="model_edit" name="model_edit" class="form-control">
                                                                <ul class="list-unstyled" id="model_edit_alert"></ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">

                                                        <div class="row mb-1">
                                                            <label for="tahun_pembuatan_edit" class="col-3 col-form-label">Tahun Pembuatan</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="tahun_pembuatan_edit" name="tahun_pembuatan_edit" class="form-control">
                                                                <ul class="list-unstyled" id="tahun_pembuatan_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="nomor_rangkaian_edit" class="col-3 col-form-label">Nomor Rangkaian</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="nomor_rangkaian_edit" name="nomor_rangkaian_edit" class="form-control">
                                                                <ul class="list-unstyled" id="nomor_rangkaian_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="nomor_mesin_edit" class="col-3 col-form-label">Nomor Mesin</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="nomor_mesin_edit" name="nomor_mesin_edit" class="form-control">
                                                                <ul class="list-unstyled" id="nomor_mesin_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="warna_edit" class="col-3 col-form-label">Warna</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="warna_edit" name="warna_edit" class="form-control">
                                                                <ul class="list-unstyled" id="warna_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="warna_tnkb_edit" class="col-3 col-form-label">Warna TNKB</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="warna_tnkb_edit" name="warna_tnkb_edit" class="form-control">
                                                                <ul class="list-unstyled" id="warna_tnkb_edit_alert"></ul>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <label for="bahan_bakar_edit" class="col-3 col-form-label">Bahan Bakar</label>
                                                            <div class="col-4">
                                                                <input type="text" value="" id="bahan_bakar_edit" name="bahan_bakar_edit" class="form-control">
                                                                <ul class="list-unstyled" id="bahan_bakar_edit_alert"></ul>
                                                            </div>
                                                        </div>
                                                    </div>                                         
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" id="update_Btn">Perbaharui Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{-- View Modal --}}
                            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                <div class=" modal-dialog  modal-fullscreen">
                                    <div class="modal-content p-4">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewModalLabel">Detail Pengguna :  <span id="id_view_user"></span></h5>
                                            <input type="hidden" class="d-none" id="user_id_value" value="">
                                            <button type="button" class="btn-close" data-bs-dismiss='modal' aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">

                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav_detail_kendaraan" data-bs-toggle="tab" data-bs-target="#detail_kendaraan" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Data Kendaraan</button>
                                                    <button class="nav-link" id="nav_detail_pemeliharaan" data-bs-toggle="tab" data-bs-target="#detail_pemeliharaan" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Catatan Pemeliharaan</button>
                                                </div>
                                            </nav>

                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active my-4" id="detail_kendaraan" role="tabpanel" aria-labelledby="detail_kendaraan_tab" tabindex="0">
                                                    <div class="card mb-2">
                                                        <div class="card-header">
                                                        Data Kendaraan
                                                        </div>
                                                        <div class="card-body row">
                                                            <div class="col">
    
                                                                <div class="row">
                                                                    <label for="view_nomor_registrasi" class="col-3 col-form-label">Nomor Registrasi</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_nomor_registrasi" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_nama_pemilik" class="col-3 col-form-label">Nama Pemilik</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_nama_pemilik" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_alamat" class="col-3 col-form-label">Alamat</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_alamat" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_merk" class="col-3 col-form-label">Merk</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_merk" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_tipe" class="col-3 col-form-label">Tipe</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_tipe" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_jenis" class="col-3 col-form-label">Jenis</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_jenis" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_model" class="col-3 col-form-label">Model</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_model" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="col">
    
                                                                <div class="row mb-1">
                                                                    <label for="view_tahun_pembuatan" class="col-3 col-form-label">Tahun Pembuatan</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_tahun_pembuatan" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_nomor_rangkaian" class="col-3 col-form-label">Nomor Rangkaian</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_nomor_rangkaian" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_nomor_mesin" class="col-3 col-form-label">Nomor Mesin</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_nomor_mesin" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_warna" class="col-3 col-form-label">Warna</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_warna" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_warna_tnkb" class="col-3 col-form-label">Warna TNKB</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_warna_tnkb" class="form-control">
                                                                    </div>
                                                                </div>
    
                                                                <div class="row mb-1">
                                                                    <label for="view_bahan_bakar" class="col-3 col-form-label">Bahan Bakar</label>
                                                                    <div class="col-4">
                                                                        <input type="text" disabled value="" id="view_bahan_bakar" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="detail_pemeliharaan" role="tabpanel" aria-labelledby="detail_pemeliharaan_tab" tabindex="0">
                                                    <div class="my-4 row">
                                                        <form class="d-flex my-2" role="search">
                                                            <input class="form-control me-2" type="search" placeholder="Masukkan Data" aria-label="Search" id="searchBox-log">
                                                            <button class="btn btn-outline-success" type="submit">Cari</button>
                                                        </form>
                                                        <div id="render_servicelog_id"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    {{-- Delete Modal --}}
                            <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Hapus <span id="delete_user_id"></span></h4>
                                            <input type="text" class="d-none" value="">
                                        </div>

                                        <div class="modal-body">
                                            <div class="alert alert-danger p-3">
                                                <h3 >Tekan 'Hapus' untuk mengkonfirmasi</h3>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        ID yang akan dihapus <strong class="select_delete_id"></strong>
                                                    </li>
                                                    <li>
                                                        <strong>Data yang dihapus tidak akan bisa dikembalikan</strong>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" id="" data-bs-dismiss="modal" class="btn btn-secondary">Close</button>
                                            <button type="button" id="deleteBtn" class="btn btn-danger">Hapus</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    {{-- Add Servicelog Modal --}}
                        <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="ServiceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
                                <div class="modal-content p-4">
                                    <div class="modal-header">
                                        <h3 class="text-center">Pencatatan Perawatan Kendaraan</h3>
                                    </div>

                                    <div class="modal-body">

                                        <div class="alert alert-success" id="servicelog_alert">
                                            <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                                            <strong>Sukses </strong> Menambahkan Catatan Pemeliharaan Kendaraan.
                                        </div>

                                        <div class="mb-2 row">
                                            <label for="" class="col-form-label col-sm-2">ID Kendaraan</label>
                                            <div class="col-sm-10">
                                                <input disabled class="form-control" type="string" value="" id="id_kendaraan_log">
                                                <ul class="list-unstyled" id=""></ul>
                                            </div>
                                        </div>

                                        <div class="mb-2 row">
                                            <label for="service_log" class="col-form-label col-sm-2">Pemeliharaan Kendaraan</label>
                                            <div id="service_option" class="col-sm-10"></div>
                                        </div>

                                        <div class="mb-2 row">
                                            <label for="service_detail" class="col-form-label col-sm-2">Detail</label>
                                            <div class="col-sm-10">
                                                <textarea name="service_detail" id="service_detail" rows="3" class="form-control"></textarea>
                                                <ul class="list-unstyled" id="detail_pemeliharaan"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-2 row">
                                            <button type="button" id="addLogBtn" class="btn btn-primary col-10 offset-2">Simpan</button>
                                        </div>

                                    </div> 

                                    <div class="modal-footer">
                                        <button type="button" data-bs-dismiss="modal" class="btn btn-seconday">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{-- Render User Data Tab--}}
                        <div class="tab-pane fade active show" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab" tabindex="0">
                            
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Masukkan Data" aria-label="Search" id="searchBox">
                                <button class="btn btn-outline-success" type="submit">Cari</button>
                            </form>

                            <div class="alert alert-success" id="success-delete-alert">
                                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                                <strong>Sukses </strong> Menghapus Data.
                            </div>

                            <div id="renderUser" class="rounded border border-1 mt-4 p-2">
                                {{-- render data --}}
                            </div>
                        </div>

                    {{-- Add User Data Tab--}}
                        <div class="tab-pane fade  " id="v-pills-form" role="tabpanel" aria-labelledby="v-pills-form-tab" tabindex="0">
                            <div class="rounded shadow w-auto p-4 ">
                                <h3 class="text-center">Tambah Pengguna Baru</h3>

                                <div class="p-2 mt-2">
                                    <div class="my-4 row">
                                        <h4>Data Login</h4>
                                        <div class="mb-3 row">
                                            <label for="username" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="username" name="username">
                                                <ul class="list-unstyled" id="usernamealert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3  row">
                                            <label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <ul class="list-unstyled" id="passwordalert"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="my-2 row">
                                        <h4>Data Kendaraan</h4>

                                        <div class="mb-3 row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                                <div class="col-sm-10" id="renderCategory">
                                                
                                                </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nomor_registrasi" class="col-sm-2 col-form-label">Nomor Registrasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_registrasi" name="nomor_registrasi" required>
                                                <ul class="list-unstyled" id="nomor_registrasi_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nama_pemilik" class="col-sm-2 col-form-label">Name Pemilik</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
                                                <ul class="list-unstyled" id="nama_pemilik_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                                                <ul class="list-unstyled" id="alamat_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="merk" class="col-sm-2 col-form-label">Merek</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="merk" name="merk" required>
                                                <ul class="list-unstyled" id="merk_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tipe" name="tipe" required>
                                                <ul class="list-unstyled" id="tipe_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jenis" name="jenis" required>
                                                <ul class="list-unstyled" id="jenis_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="model" class="col-sm-2 col-form-label">Model</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="model" name="model" required>
                                                <ul class="list-unstyled" id="model_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="tahun_pembuatan" class="col-sm-2 col-form-label">Tahun Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" required>
                                                <ul class="list-unstyled" id="tahun_pembuatan_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nomor_rangkaian" class="col-sm-2 col-form-label">Nomor Rangkaian</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_rangkaian" name="nomor_rangkaian" required>
                                                <ul class="list-unstyled" id="nomor_rangkaian_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nomor_mesin" class="col-sm-2 col-form-label">Nomor Mesin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_mesin" name="nomor_mesin" required>
                                                <ul class="list-unstyled" id="nomor_mesin_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="warna" name="warna">
                                                <ul class="list-unstyled" id="warna_alert"></ul>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="warna_tnkb" class="col-sm-2 col-form-label">Warna TNKB</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="warna_tnkb" name="warna_tnkb" required>
                                                <ul class="list-unstyled" id="warna_tnkb_alert"></ul>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="bahan_bakar" class="col-sm-2 col-form-label">Bahan Bakar</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" required>
                                                <ul class="list-unstyled" id="bahan_bakar_alert"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-success" id="success-alert">
                                        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                                        <strong>Sukses </strong> Menambahkan User Baru.
                                    </div>

                                    <div class="row flex">
                                        <button class="btn btn-primary" type="submit" id="submitBtn">Masukkan Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{-- Category Tab --}}
                        <div class="tab-pane fade" id="v-pills-category" role="tabpanel" aria-labelledby="v-pills-category-tab" tabindex="0">
                                <div class="rounded shadow w-auto p-4">
                                    <h3 class="text-center">Tambahkan Kategori Kendaraan Baru</h3>

                                    <form action="" method="POST" enctype="multipart/form-data" id="categoryForm">
                                        <div class="p-2 mt-2">
                                            <div class="mb-3 row">
                                                <label for="kategori" class="col-form-label col-sm-2">Kategori</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="new_kategori" id="new_kategori" class="form-control">
                                                    <ul class="list-unstyled" id="new_kategori_alert"></ul>
                                                </div>
                                            </div>
        
                                            <div class="mb-3 row">
                                                <label for="image" class="col-sm-2 col-form-label">Ikon</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="image" id="image" class="form-control">
                                                    <ul class="list-unstyled" id="image_alert"></ul>
                                                </div>
                                            </div>

                                            <div class="alert alert-success" id="success-update-alert">
                                                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                                                <strong>Sukses </strong> Menambahkan Kategori Baru.
                                            </div>
        
                                            <div class="mb-3-row">
                                                <button type="submit" id="newCategoryBtn" class="btn btn-success col-10 offset-2">Masukkan Data</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="rounded border border-1 p-4 mt-4" id="categoryList"></div>
                            </div>
                    {{-- Service Tab --}}
                            <div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab" tabindex="0">
                                <div class="rounded shadow w-auto p-4">
                                    <h3 class="text-center">Pemeliharaan</h3>

                                    <div class="p-2 mt-2">
                                        <div class="mb-3 row">
                                            <label for="service" class="col-form-label col-sm-2">Jenis Perawatan / Pemeliharaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="service" id="service" class="form-control">
                                                <ul class="list-unstyled" id="service_alert"></ul>
                                            </div>

                                            <div class="alert alert-success" id="success-addservice-alert">
                                                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                                                <strong>Sukses </strong> Menambahkan Kategori Baru.
                                            </div>

                                            <div class="mb-3-row">
                                                <button type="submit" id="newServiceBtn" class="btn btn-success col-10 offset-2">Masukkan Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="rounded border border-1 p-4 mt-4" id="renderService"></div>
                            </div>

                        </div>

                        
                    </div>
                </div>
            </div>
    </div>

@endsection

@push('child-script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        
// Edit Service Modal
    // $('#success-edit-service-alert').hide();

    // $(document).on('click','#editService', function (e) {
    //     e.preventDefault();
    //     var service_id = $(this).val();
    //     $('#service_edit_modal').modal('show');
    //     $.ajax({
    //         type: "GET",
    //         url: ""+service_id,
    //         dataType: "json",
    //         success: function (response) {
    //             $('#service_edit_input').val(response);    
    //         }
    //     });
    // });

    // $(document).on('click', function (e) {
    //     e.preventDefault();
    //     var service_id = $(this).val();

    //     // var service_edit = {
    //     //     ''
    //     // };

    //     $.ajaxSetup({
    //                     headers: {
    //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                     }
    //                 });

    //     $.ajax({
    //         type: "PATCH",
    //         url: "",
    //         data: service_edit,
    //         dataType: "json",
    //         success: function (response) {
    //             if(response.status == 400){

    //             }
    //             else if(response.status == 200){

    //             }
    //         }
    //     });
    // });

// Delete Service
    // $('#success-delete-service-alert').hide();
    // $(document).on('click','#', function (e) {
    //     e.preventDefault();
    //     var delete_id = $(this).val();
    //     $('#service_delete_modal').modal('show');

    // });

    // $(document).on('click','#', function (e) {
    //     e.preventDefault();
    //     var delete_id = $(this).val();

    //     $.ajaxSetup({
    //                     headers: {
    //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                     }
    //                 });
        
    //     $.ajax({
    //         type: "",
    //         url: "url",
    //         data: "data",
    //         dataType: "dataType",
    //         success: function (response) {
                
    //         }
    //     });
    // });
// Category List 
    var list_category = function(){
        $(document).ready(function(){
            $.ajax({
                type: "GET",
                url: "{{route('category_list')}}",
                data: "data",
                dataType: "json",
                success: function (response) {
                    $('#categoryList').html(response.category_list);
                }
            });
        })
    }

    list_category();

// Tab Button
    $(document).on('click','#v-pills-tab .nav-link',function(e){
        e.preventDefault();
        $('#v-pills-form input').val("");
        $('#v-pills-form ul').html("");
        $('#v-pills-form ul').removeClass('alert alert-danger');
    });
// Close Button
    $(document).on('click','.btn-close', function(e){
        e.preventDefault();
        $('.modal input').val("");
        $('.modal table tbody').html("");
    });

    $(document).on('keydown',function(e){
        if(event.key == 'Escape'){
            e.preventDefault();
            $('.modal input').val("");
            $('.modal table tbody').html("");
        }
    });

// Render Kategori
    var render_category = function(){
        $(document).ready(function () {
        $.ajax({
        type: "GET",
        url: "{{route('renderCategory')}}",
        dataType: "json",
        success: function (response) {
            $('#renderCategory').html(response.categorys);
        }
    });
    });
    };
    
    render_category();

// Kategori Path
        $(document).on('change','#kategori',function (e) {
        e.preventDefault();
        var id_kategori = this.value;
        $.ajax({
            type: "GET",
            url: '/ikon/'+id_kategori,
            success: function (response) {
                $('#path').val(response.ikon.path);
            }
        });
    });
    


// Delete Modal
    $('#success-delete-alert').hide();
    $(document).on('click','#openDelete', function (e) {
        e.preventDefault();
        var delete_id = $(this).val();
        $('#DeleteModal').modal('show');
        $('.select_delete_id').html(delete_id);
        $('#deleteBtn').val(delete_id);
    });

    $(document).on('click','#deleteBtn', function (e) {
        e.preventDefault();
        var delete_id = $(this).val();

        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
        
        $.ajax({
            type: "Get",
            url: "/delete/user/"+delete_id,
            // data: {"_method":"DELETE","_token": "{{ csrf_token() }}"},
            success: function (response) {
                if(response.status == 200){
                    $("#success-delete-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#success-delete-alert").slideUp(500);
                    });
                    $('#DeleteModal').modal('hide');
                    $('#deleteBtn').val();
                    $('.select_delete_id').html('');
                    render_user();
                }
            }
        });
    });

// View Modal
    $(document).on('click','#openView', function () {
        var view_id = $(this).val();
        render_log(view_id);
        $('#user_id_value').val(view_id);
        $('#id_view_user').text(view_id);
        $('#viewModal').modal('show');

        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

        $.ajax({
            type: "GET",
            url: '/view/'+view_id,
            data: "data",
            dataType: "json",
            success: function (response) {
                $('#view_nomor_registrasi').val(response.user.nomor_registrasi);
                $('#view_nama_pemilik').val(response.user.nama_pemilik);
                $('#view_alamat').val(response.user.alamat);
                $('#view_merk').val(response.user.merk);
                $('#view_tipe').val(response.user.tipe);
                $('#view_jenis').val(response.user.jenis);
                $('#view_model').val(response.user.model);
                $('#view_tahun_pembuatan').val(response.user.tahun_pembuatan);
                $('#view_nomor_rangkaian').val(response.user.nomor_rangkaian);
                $('#view_nomor_mesin').val(response.user.nomor_mesin);
                $('#view_warna').val(response.user.warna);
                $('#view_warna_tnkb').val(response.user.warna_tnkb);
                $('#view_bahan_bakar').val(response.user.bahan_bakar);

                $.each(response.log, function (indexInArray, valueOfElement) { 
                    $('#render_service_log').append('<tr><td>'+valueOfElement.id+'</td><td>'+valueOfElement.catatan_servis+'</td></tr>');
                });
            }
        });

    });

// Show and Render User
    var render_user = function(){
        $(document).ready(function () {
            $.ajax({
                async:false,
                type: "GET",
                url: '{{route('user_render')}}',
                dataType: "json",
                success: function (response) {
                    $('#renderUser').html(response.html);
                }
            });
        });
    }
    render_user();

// New User Tab 
    $("#success-alert").hide();
    $(document).on('click','#submitBtn', function (e) {
        e.preventDefault();

        var user = {
            'username':$('#username').val(),
            'password':$('#password').val(),
            'nomor_registrasi':$('#nomor_registrasi').val(),
            'nama_pemilik':$('#nama_pemilik').val(),
            'alamat':$('#alamat').val(),
            'merk':$('#merk').val(),
            'tipe':$('#tipe').val(),
            'jenis':$('#jenis').val(),
            'model':$('#model').val(),
            'tahun_pembuatan':$('#tahun_pembuatan').val(),
            'nomor_rangkaian':$('#nomor_rangkaian').val(),
            'nomor_mesin':$('#nomor_mesin').val(),
            'warna':$('#warna').val(),
            'warna_tnkb':$('#warna_tnkb').val(),
            'bahan_bakar':$('#bahan_bakar').val(),
            'kategori' : $('#kategori').val(),
            'path' : $('#path').val(),
        };

        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

        $.ajax({
        type: "POST",
        url: "{{route('NewUser')}}",
        data: user,
        dataType: "json",
        success: function (response) {
            if(response.status == 400){
                $('#v-pills-form').find('ul').html('');
                    if(response.errors.username){
                        $('#usernamealert').append('<li>'+response.errors.username+'</li>');
                        $('#usernamealert').addClass('alert alert-danger');
                    }
                    if(response.errors.password){
                        $('#passwordalert').append('<li>'+response.errors.password+'</li>');
                        $('#passwordalert').addClass('alert alert-danger');
                    }
                    if(response.errors.kategori){
                        $('#kategori_alert').append('<li>'+response.errors.kategori+'</li>')
                        $('#kategori_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.nomor_registrasi){
                        $('#nomor_registrasi_alert').append('<li>'+response.errors.nomor_registrasi+'</li>');
                        $('#nomor_registrasi_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.nama_pemilik){
                        $('#nama_pemilik_alert').append('<li>'+response.errors.nama_pemilik+'</li>');
                        $('#nama_pemilik_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.alamat){
                        $('#alamat_alert').append('<li>'+response.errors.alamat+'</li>');
                        $('#alamat_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.merk){
                        $('#merk_alert').append('<li>'+response.errors.merk+'</li>');
                        $('#merk_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.tipe){
                        $('#tipe_alert').append('<li>'+response.errors.tipe+'</li>');
                        $('#tipe_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.jenis){
                        $('#jenis_alert').addClass('alert alert-danger');
                        $('#jenis_alert').append('<li>'+response.errors.jenis+'</li>');
                    }
                    if(response.errors.model){
                        $('#model_alert').append('<li>'+response.errors.model+'</li>');
                        $('#model_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.tahun_pembuatan){
                        $('#tahun_pembuatan_alert').append('<li>'+response.errors.tahun_pembuatan+'</li>');
                        $('#tahun_pembuatan_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.nomor_rangkaian){
                        $('#nomor_rangkaian_alert').append('<li>'+response.errors.nomor_rangkaian+'</li>');
                        $('#nomor_rangkaian_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.nomor_mesin){
                        $('#nomor_mesin_alert').append('<li>'+response.errors.nomor_mesin+'</li>'); 
                        $('#nomor_mesin_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.warna){
                        $('#warna_alert').append('<li>'+response.errors.warna+'</li>');
                        $('#warna_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.warna_tnkb){
                        $('#warna_tnkb_alert').append('<li>'+response.errors.warna_tnkb+'</li>');  
                        $('#warna_tnkb_alert').addClass('alert alert-danger');
                    }
                    if(response.errors.bahan_bakar){
                        $('#bahan_bakar_alert').append('<li>'+response.errors.bahan_bakar+'</li>');
                        $('#bahan_bakar_alert').addClass('alert alert-danger');
                    }

            }
            else if(response.status == 200){
                $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                    $("#success-alert").slideUp(500);
                });
                $('#v-pills-form').find('ul').html('');
                $('#v-pills-form').find('input').val('');
                $('#v-pills-form').find('input').removeClass('alert alert-danger');
                render_user();
            }

            
        }
    });            
    });

// Edit Modal
    $('#success-edit-alert').hide();    

    $(document).on('click','#openEdit', function (e) {
        e.preventDefault();
        var user_id = $(this).val();
        $('#editModal').modal('show');
        $.ajax({
            type: "GET",
            url: "/view/"+user_id,
            success: function (response) {
                        $('#nomor_registrasi_edit').val(response.user.nomor_registrasi);
                        $('#nama_pemilik_edit').val(response.user.nama_pemilik);
                        $('#alamat_edit').val(response.user.alamat);
                        $('#merk_edit').val(response.user.merk);
                        $('#tipe_edit').val(response.user.tipe);
                        $('#jenis_edit').val(response.user.jenis);
                        $('#model_edit').val(response.user.model);
                        $('#tahun_pembuatan_edit').val(response.user.tahun_pembuatan);
                        $('#nomor_rangkaian_edit').val(response.user.nomor_rangkaian);
                        $('#nomor_mesin_edit').val(response.user.nomor_mesin);
                        $('#warna_edit').val(response.user.warna);
                        $('#warna_tnkb_edit').val(response.user.warna_tnkb);
                        $('#bahan_bakar_edit').val(response.user.bahan_bakar);
                        $('#update_Btn').val(user_id);
            }
        });
    });

    $(document).on('click','#update_Btn', function (e) {
        e.preventDefault();
        var user_id = $(this).val();
        var user_edit = {
            'nomor_registrasi':$('#nomor_registrasi_edit').val(),
            'nama_pemilik':$('#nama_pemilik_edit').val(),
            'alamat':$('#alamat_edit').val(),
            'merk':$('#merk_edit').val(),
            'tipe':$('#tipe_edit').val(),
            'jenis':$('#jenis_edit').val(),
            'model':$('#model_edit').val(),
            'tahun_pembuatan':$('#tahun_pembuatan_edit').val(),
            'nomor_rangkaian':$('#nomor_rangkaian_edit').val(),
            'nomor_mesin':$('#nomor_mesin_edit').val(),
            'warna':$('#warna_edit').val(),
            'warna_tnkb':$('#warna_tnkb_edit').val(),
            'bahan_bakar':$('#bahan_bakar_edit').val(),
        };

        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

        $.ajax({
            type: "PATCH",
            url: `/update/user/`+user_id,
            data: user_edit,
            dataType: "json",
            success: function (response) {
                if(response.status == 400){
                    $('#v-pills-form').find('ul').html('');
                        if(response.errors.nomor_registrasi){
                            $('#nomor_registrasi_edit_alert').append('<li>'+response.errors.nomor_registrasi+'</li>');
                            $('#nomor_registrasi_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.nama_pemilik){
                            $('#nama_pemilik_edit_alert').append('<li>'+response.errors.nama_pemilik+'</li>');
                            $('#nama_pemilik_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.alamat){
                            $('#alamat_edit_alert').append('<li>'+response.errors.alamat+'</li>');
                            $('#alamat_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.merk){
                            $('#merk_edit_alert').append('<li>'+response.errors.merk+'</li>');
                            $('#merk_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.tipe){
                            $('#tipe_edit_alert').append('<li>'+response.errors.tipe+'</li>');
                            $('#tipe_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.jenis){
                            $('#jenis_edit_alert').addClass('alert alert-danger');
                            $('#jenis_edit_alert').append('<li>'+response.errors.jenis+'</li>');
                        }
                        if(response.errors.model){
                            $('#model_edit_alert').append('<li>'+response.errors.model+'</li>');
                            $('#model_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.tahun_pembuatan){
                            $('#tahun_pembuatan_edit_alert').append('<li>'+response.errors.tahun_pembuatan+'</li>');
                            $('#tahun_pembuatan_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.nomor_rangkaian){
                            $('#nomor_rangkaian_edit_alert').append('<li>'+response.errors.nomor_rangkaian+'</li>');
                            $('#nomor_rangkaian_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.nomor_mesin){
                            $('#nomor_mesin_edit_alert').append('<li>'+response.errors.nomor_mesin+'</li>'); 
                            $('#nomor_mesin_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.warna){
                            $('#warna_edit_alert').append('<li>'+response.errors.warna+'</li>');
                            $('#warna_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.warna_tnkb){
                            $('#warna_tnkb_edit_alert').append('<li>'+response.errors.warna_tnkb+'</li>');  
                            $('#warna_tnkb_edit_alert').addClass('alert alert-danger');
                        }
                        if(response.errors.bahan_bakar){
                            $('#bahan_bakar_edit_alert').append('<li>'+response.errors.bahan_bakar+'</li>');
                            $('#bahan_bakar_edit_alert').addClass('alert alert-danger');
                        }
                }
                else if(response.status == 200){
                    $("#success-edit-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#success-edit-alert").slideUp(500);
                    });
                    $('#editModal ul').html('');
                    $('#editModal ul').removeClass('alert alert-danger');
                    render_user();
                }
                }
        });
    });

// Search Box User
        $(document).ready(function () {
                $('#searchBox').on("keyup",function(){
                    var value = $(this).val().toLowerCase();
                    $('#tableBody tr').filter(function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) >-1)
                    });
                });
            });

// New Category
        $(document).ready(function () {
            $('#success-update-alert').hide();
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

            $('#categoryForm').submit(function(e){
                e.preventDefault();
                var CategoryData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{route('newCategory')}}",
                    data: CategoryData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if(response.status == 400){
                            if(response.errors.new_kategori){
                                $('#new_kategori_alert').addClass('alert alert-danger');
                                $('#new_kategori_alert').append('<li>'+response.errors.kategori+'</li>')
                            }
                            if(response.errors.image){
                                $('#image_alert').addClass('alert alert-danger');
                                $('#image_alert').addClass('<li>'+respons.errors.image+'</li>')
                            }
                            
                        }
                        else if(response.status == 200){
                            $("#success-update-alert").fadeTo(2000, 500).slideUp(500, function() {
                                $("#success-update-alert").slideUp(500);
                            });
                            $('#categoryForm').find('input').val("");
                            render_category();
                            list_category();
                        }
                        
                    }
                });
            })
        });
// New Service
        $(document).ready(function () {
            $('#success-addservice-alert').hide();

        $(document).on('click','#newServiceBtn',function(e){
            e.preventDefault();
            var ServiceData = {
                'service':$('#service').val(),
            };

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

            $.ajax({
                type: "POST",
                url: "{{route('newService')}}",
                data: ServiceData,
                dataType: "json",
                success: function (response) {
                    if(response.status == 400){
                        $('#v-pills-service').find('ul').html('');
                            if(response.errors.new_service){
                                $('#new_service_alert').append('<li>'+response.errors.service+'</li>')
                                $('#new_service_alert').addClass('alert alert-danger');
                            }
                    }
                    else if (response.status == 200){
                        $("#success-addservice-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#success-addservice-alert").slideUp(500);
                    });
                        $('#v-pills-service input').val('');
                        $('#new_service_alert ul').html('');
                        $('#new_service_alert ul').removeClass('alert alert-danger');

                        render_service();
                    }
                }
            });

        })
        });
// Service List
        var list_service = function(){
            $(document).ready(function () {
                $.ajax({
                    type: "GET",
                    url: "{{route('service_list')}}",
                    dataType: "json",
                    success: function (response) {
                        $('#service_option').html(response.service_list);
                    }
                });
            });
        }

        list_service();
// Render Service
        var render_service = function(){
            $(document).ready(function () {
                $.ajax({
                    type: "GET",
                    url: "{{route('renderService')}}",
                    dataType: "json",
                    success: function (response) {
                        $('#renderService').html(response.services);
                    }
                });
            });
        }

        render_service();

// Service Modal
        $(document).on('click','#openService', function (e) {
            e.preventDefault();
            list_service();
            var user_id = $(this).val();
            $('#id_kendaraan_log').val(user_id);
            $('#service_detail').val('');
            $('#serviceModal').modal('show');
            $('#servicelog_alert').hide();
        });

                $(document).on('click','#addLogBtn', function (e) {
                    e.preventDefault();
    
                    var log_data = {
                        'id_kendaraan' : $('#id_kendaraan_log').val(),
                        'jenis_pemeliharaan' : $('#service_log').val(),
                        'catatan_pemeliharaan' : $('#service_detail').val(),
                    };
    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
    
                    $.ajax({
                        type: "POST",
                        url: "{{route('newServiceLog')}}",
                        data: log_data,
                        dataType: "json",
                        success: function (response) {
                            if(response.status == 400){
                                if(response.errors.id_kendaraan){
                                    $('#id_kendaraan_alert').addClass('alert alert-danger');
                                    $('#id_kendaraan_alert').append('<li>'+response.errors.id_kendaraan+'</li>');
                                }
                                if(response.errors.jenis_pemeliharaan){
                                    $('#jenis_pemeliharaan').addClass('alert alert-danger');
                                    $('#jenis_pemeliharaan').append('<li>'+response.errors.jenis_pemeliharaan+'</li>');
                                }
                                if(response.errors.detail_pemeliharaan){
                                    $('#detail_pemeliharaan').addClass('alert alert-danger');
                                    $('#detail_pemeliharaan').append('<li>'+response.errors.detail_pemeliharaan+'</li>');
                                }
                            }
                            else if(response.status == 200){
                                $("#servicelog_alert").fadeTo(2000, 500).slideUp(500, function() {
                                $("#servicelog_alert").slideUp(500);
                                list_service();
                                $('#service_detail').val('');
                            });
                                
                            }
                        }
                    });
                });

// Render Service Log
        var render_log = function(id){
            $(document).ready(function () {
                $.ajax({
                    type: "GET",
                    url: "/render/log/"+id,
                    dataType: "json",
                    success: function (response) {
                        $('#render_servicelog_id').html(response.log);
                    }
                });
            });
        }

// Search Box Service Log
    $(document).ready(function () {
                    $('#searchBox-log').on("keyup",function(){
                        var value = $(this).val().toLowerCase();
                        $('#tableBody-log tr').filter(function(){
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) >-1)
                        });
                    });
                });
</script>



@endpush
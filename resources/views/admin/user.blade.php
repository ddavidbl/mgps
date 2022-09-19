@extends('layouts.app')

@section('content')
    <div class="mt-2 p-4 ">
        
            <div class="row">
                <div class="d-flex align-items-start">
                    <div class=" p-1 col-2 nav flex-column nav-pills me-3 min-vh-100  rounded shadow bg-body align-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link shadow active  mt-4 w-75" id="v-pills-user-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user" type="button" role="tab" aria-controls="v-pills-user" aria-selected="true">User</button>
                        <button class="nav-link shadow  mt-4 w-75" id="v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">New User</button>
                        <button class="nav-link shadow mt-4 w-75" id="v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-category" type="button" role="tab" aria-controls="v-pills-category">Category</button>
                    </div> 
                    <div class="rounded shadow bg-body align-content-center tab-content col-10 p-4 vh-100 overflow-scroll" id="v-pills-tabContent">
                        
                        {{-- Edit Modal --}}
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit User: <span id="id_user"></span></h5>
                                            <input type="hidden" class="d-none" id="user_id_value">
                                            <button type="button" class="btn-close" data-bs-dismiss='modal' aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3 form-group">
                                                <label for=""></label>
                                                <input type="text" name="" id="">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" id="" class="btn btn-primary" >Update Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {{-- View Modal --}}
                            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class=" modal-dialog  modal-fullscreen">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">User: <span id="id_view_user"></span></h5>
                                            <input type="hidden" class="d-none" id="user_id_value" value="">
                                            <button type="button" class="btn-close" data-bs-dismiss='modal' aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card mb-2">
                                                    <div class="card-header">
                                                    Data Kendaraan
                                                    </div>
                                                    <div class="card-body row ">
                                                        <div class="col ">

                                                            <div class="row mb-1">
                                                                <label for="view_nomor_registrasi" class="col-3 col-form-label">Nomor Registrasi</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_nomor_registrasi" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_nama_pemilik" class="col-3 col-form-label">Nama Pemilik</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_nama_pemilik" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_alamat" class="col-3 col-form-label">Alamat</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_alamat" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_merk" class="col-3 col-form-label">Merk</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_merk" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_tipe" class="col-3 col-form-label">Tipe</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_tipe" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_jenis" class="col-3 col-form-label">Jenis</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_jenis" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_model" class="col-3 col-form-label">Model</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_model" class="form-control text-uppercase">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col">

                                                            <div class="row mb-1">
                                                                <label for="view_tahun_pembuatan" class="col-3 col-form-label">Tahun Pembuatan</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_tahun_pembuatan" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_nomor_rangkaian" class="col-3 col-form-label">Nomor Rangkaian</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_nomor_rangkaian" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_nomor_mesin" class="col-3 col-form-label">Nomor Mesin</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_nomor_mesin" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_warna" class="col-3 col-form-label">Warna</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_warna" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_warna_tnkb" class="col-3 col-form-label">Warna TNKB</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_tnkb" class="form-control text-uppercase">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-1">
                                                                <label for="view_bahan_bakar" class="col-3 col-form-label">Bahan Bakar</label>
                                                                <div class="col-4">
                                                                    <input type="text" disabled value="" id="view_bahan_bakar" class="form-control text-uppercase">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>
                                                    <div class="card-footer d-flex justify-content-between">
                                                        <div>
                                                            <button class="btn btn-warning px-4" type="button">Edit</button>
                                                            <button class="btn btn-primary px-4" type="button">Update</button>
                                                        </div>
                                                        <div class="alert">
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        Data Service Kendaraan
                                                    </div>
                                                    <div class="card-body" id="render_log">
                                                        {{-- render log data --}}
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {{-- Delete Modal --}}
                            <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Delete <span id="delete_user_id"></span></h4>
                                            <input type="text" class="d-none" value="">
                                        </div>

                                        <div class="modal-body">

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" id="" data-bs-dismiss="modal" class="btn btn-secondary">Close</button>
                                            <button type="button" id="deleteBtn" class="btn btn-danger">Confirm Delete</button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        <div class="tab-pane fade active show" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab" tabindex="0">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchBox">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <div id="renderUser" class="rounded border border-1 mt-4 p-2">
                                {{-- render data --}}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-category" role="tabpanel" aria-labelledby="v-pills-category-tab" tabindex="0">
                            <div class="rounded shadow w-auto p-4">
                                <h3>Category CRUD</h3>
                            </div>
                        </div>

                        <div class="tab-pane fade  " id="v-pills-form" role="tabpanel" aria-labelledby="v-pills-form-tab" tabindex="0">
                            <div class="rounded shadow w-auto p-4 ">
                                <h3 class="text-center">Add New User Form</h3>



                                <div class="p-2 mt-2">
                                    <div class="mb-4 row">
                                        <h4>Data Login</h4>
                                        <div class="mb-3 row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="username" name="username">
                                                <ul class="list-unstyled" id="usernamealert">
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="mb-3  row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <ul class="list-unstyled" id="passwordalert">

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-2 row">
                                        <h4>Data Kendaraan</h4>

                                        <div class="mb-3 row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select name="kategori" id="kategori" class="form-select">
                                                <option selected disabled>Pilih Kategori</option>
                                                @foreach ( $kategoris as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" class="d-none" disabled id="ikonKategori" value="">
                                        </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nomor_registrasi" class="col-sm-2 col-form-label">Nomor Registrasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_registrasi" name="nomor_registrasi" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nama_pemilik" class="col-sm-2 col-form-label">Name Pemilik</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" name="alamat" required>

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="merk" name="merk" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tipe" name="tipe" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jenis" name="jenis" required>

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="model" class="col-sm-2 col-form-label">Model</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="model" name="model" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="tahun_pembuatan" class="col-sm-2 col-form-label">Tahun Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nomor_rangkaian" class="col-sm-2 col-form-label">Nomor Rangkaian</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_rangkaian" name="nomor_rangkaian" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nomor_mesin" class="col-sm-2 col-form-label">Nomor Mesin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_mesin" name="nomor_mesin" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="warna" name="warna">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="warna_tnkb" class="col-sm-2 col-form-label">Warna TNKB</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="warna_tnkb" name="warna_tnkb" required>

                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="bahan_bakar" class="col-sm-2 col-form-label">Bahan Bakar</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row flex">
                                        <button class="btn btn-primary" type="submit" id="submitBtn">Submit Data</button>
                                    </div>
                                </div>
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

// Close Button
    $(document).on('click','.btn-close', function(e){
        e.preventDefault();
        $('.modal input').val("");
        $('.modal table tbody').html("");
    });

    $(document).on('keydown','',function(e){
        e.preventDefault();
        if(event.key == 'Escape'){
            $('.modal input').val("");
            $('.modal table tbody').html("");
        }
    })

// Kategori Generate
    $('#kategori').change(function () { 
        var id_kategori = this.value;
        $.ajax({
            type: "GET",
            url: '{{route('ikon',['id'=>'id_kategori'])}}',
            success: function (response) {
                $('#ikonKategori').val(response.ikon.icon);
            }
        });
    });

// Delete Modal
    $(document).on('click','#openDelete', function (e) {
        e.preventDefault();
        var delete_id = $(this).val();
        $('#DeleteModal').modal('show');
        $('#delete_user_id').val(delete_id);
    });

    $(document).on('click','#deleteBtn', function (e) {
        e.preventDefault();
        var delete_id = $(this).val();
        
    });

// View Modal
    $(document).on('click','#openView', function () {
        var view_id = $(this).val();
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

                $('#render_log').html(response.log);
            }
        });

    });

// Show and Render User
    var user = function(){
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
    user();

// Create Modal

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
                // $('#usernamealert','#passwordalert','#nomor_registrasialert','#nomor_registrasialert','#alamatalert',
                // '#merkalert','#tipealert','#jenisalert',
                // 'modelalert','#tahun_pembuatanalert','#nomor_rangkaianalert',
                // '#nomor_mesinalert','#warnaalert','#warna_tnkbalert','#bahan_bakaralert').html("");
                $('#v-pills-form').find('ul').html('');
                
                $('#usernamealert').addClass('alert alert-danger');
                $('#passwordalert').addClass('alert alert-danger');
                $('#nomor_registrasialert').addClass('alert alert-danger');
                $('#nama_pemilikalert').addClass('alert alert-danger');
                $('#alamatalert').addClass('alert alert-danger');
                $('#merkalert').addClass('alert alert-danger');
                $('#tipealert').addClass('alert alert-danger');
                $('#jenisalert').addClass('alert alert-danger');
                $('#modelalert').addClass('alert alert-danger');
                $('#tahun_pembuatanalert').addClass('alert alert-danger');
                $('#nomor_rangkaianalert').addClass('alert alert-danger');
                $('#nomor_mesinalert').addClass('alert alert-danger');
                $('#warnaalert').addClass('alert alert-danger');
                $('#warna_tnkbalert').addClass('alert alert-danger');
                $('#bahan_bakaralert').addClass('alert alert-danger');


                $('#usernamealert').append('<li>'+response.errors.username+'</li>');
                $('#passwordalert').append('<li>'+response.errors.password+'</li>');
                $('#nomor_registrasialert').append('<li>'+response.errors.nomor_registrasi+'</li>');
                $('#nama_pemilikalert').append('<li>'+response.errors.nama_pemilik+'</li>');
                $('#alamatalert').append('<li>'+response.errors.alamat+'</li>');
                $('#merkalert').append('<li>'+response.errors.merk+'</li>');
                $('#tipealert').append('<li>'+response.errors.tipe+'</li>');
                $('#jenisalert').append('<li>'+response.errors.jenis+'</li>');
                $('#modelalert').append('<li>'+response.errors.model+'</li>');
                $('#tahun_pembuatanalert').append('<li>'+response.errors.tahun_pembuatan+'</li>');
                $('#nomor_rangkaianalert').append('<li>'+response.errors.nomor_rangkaian+'</li>');
                $('#nomor_mesinalert').append('<li>'+response.errors.nomor_mesin+'</li>');
                $('#warnaalert').append('<li>'+response.errors.warna+'</li>');
                $('#warna_tnkb alert').append('<li>'+response.errors.warna_tnkb+'</li>');
                $('#bahan_bakar').append('<li>'+response.errors.bahan_bakar+'</li>');
                
            }
            else if(response.status == 200){
                $('#nomor_registrasialert','#nomor_registrasialert','#alamatalert',
                '#merkalert','#tipealert','#jenisalert',
                'modelalert','#tahun_pembuatanalert','#nomor_rangkaianalert',
                '#nomor_mesinalert','#warnaalert','#warna_tnkbalert','#bahan_bakaralert')
                .html('');

                $('#v-pills-form').find('input').val('');
                user();
            }

            
        }
    });            
    });

// Edit Modal
    $(document).on('click','#openEdit', function (e) {
        e.preventDefault();
        var user_id = $(this).val();
        $('').addClass('d-none');
        $('#editModal').modal('show');
        $.ajax({
            type: "GET",
            url: "",
            success: function (response) {
                if(response.status==500){
                    $('').html("");
                    $(selector).removeClass(className);
                    $(selector).addClass(className);
                    $(selector).append(content);
                }
                else{
                    $(selector).text(textString);
                    $(selector).val();
                    $(selector).val();
                }
            }
        });
    });

    // Search Box
        $(document).ready(function () {
                $('#searchBox').on("keyup",function(){
                    var value = $(this).val().toLowerCase();
                    $('#tableBody tr').filter(function(){
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) >-1)
                    });
                });
            });
    </script>
@endpush
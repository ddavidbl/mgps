@extends('layouts.app')

@section('content')
    <div class="mt-2 p-4 ">
        
            <div class="row">
                <div class="d-flex align-items-start">
                    <div class=" p-1 col-2 nav flex-column nav-pills me-3 min-vh-100  rounded shadow bg-body align-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link shadow active  mt-4 w-75" id="v-pills-user-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user" type="button" role="tab" aria-controls="v-pills-user" aria-selected="true">User</button>
                        <button class="nav-link shadow  mt-4 w-75" id="v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">New User</button>
                    </div>
                    <div class="rounded shadow bg-body align-content-center tab-content col-10 p-4 vh-100 overflow-scroll" id="v-pills-tabContent">
                        
                        <div class="tab-pane fade active show" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab" tabindex="0">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <div id="renderUser" class="rounded border border-1 mt-4">
                                {{-- render data --}}
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

    
    
    $('#kategori').change(function () { 
        var id_kategori = this.value;
        $.ajax({
            type: "GET",
            url: '/ikon/'+id_kategori,
            success: function (response) {
                $('#ikonKategori').val(response.ikon.icon);
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
    $(document).on('click','.editBtn', function (e) {
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

    // $(document).on('click','.update_user', function (e) {
    //     e.preventDefault();
    //     $(this).text(textString);
    //     var user_id = $(selector).val();
    //     var new_user_data ={

    //     };

    //     $.ajaxSetup({
    //                     headers: {
    //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                     }
    //                 });
    //     });

    //     $.ajax({
    //         type: "PATCH",
            
    //         data: new_user_data,
    //         dataType: "json",
    //         success: function (response) {
    //             if(response.status == 400){
                    
    //             }
    //             else if(response.status == 404){

    //             }
    //             else{

    //                 user();
    //             }
    //         }
    //     });

// Delete User
    $(document).on('click','.deleteBtn', function (e) {
        e.preventDefault();
        var user_id = $(this).val();
        $(selector).text();
        $(selector).val();
        $('#deleteModal').modal('show');
        $().addClass(className);
    });
    
    $(document).on('click','.confirm_delete', function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var user_id = $(selector).val();
        $.ajax({
            type: "GET",
            data: {"_method":"DELETE","_token": "{{ csrf_token() }}"},
            dataType: "dataType",
            success: function (response) {
                $('#deleteModal').modal('show');
                $(selector).addClass(className);
                $(selector).removeClass(className);
                $(selector).text(textString);
                $(selector).text(textString);
                user();
            }
        });
    });
    </script>
@endpush
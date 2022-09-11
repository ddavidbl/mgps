@extends('layouts.app')

@section('content')
    <div class="mt-2 p-4 ">
        
            <div class="row">
                <div class="d-flex align-items-start">
                    <div class=" p-1 col-2 nav flex-column nav-pills me-3 min-vh-100  rounded shadow bg-body align-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link shadow  mt-4 w-75" id="v-pills-user-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user" type="button" role="tab" aria-controls="v-pills-user" aria-selected="true">User</button>
                        <button class="nav-link shadow active mt-4 w-75" id="v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">New User</button>
                    </div>
                    <div class="rounded shadow bg-body align-content-center tab-content col-10 p-4 vh-100 overflow-scroll" id="v-pills-tabContent">
                        
                        <div class="tab-pane fade show  " id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab" tabindex="0">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <div id="renderUser" class="rounded border border-1 mt-4">
                                {{-- render data --}}
                            </div>
                        </div>

                        <div class="tab-pane fade active show " id="v-pills-form" role="tabpanel" aria-labelledby="v-pills-form-tab" tabindex="0">
                            <div class="rounded shadow w-auto p-4 ">
                                <h3 class="text-center">Add New User Form</h3>

                                <div class="p-2 mt-2">
                                    <div class="mb-4 row">
                                        <h4>Data Login</h4>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-2 row">
                                        <h4>Data Kendaraan</h4>
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Nomor Registrasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" name="" value="">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Name Pemilik</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" name="" value="">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Merk</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Tipe</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Jenis</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Model</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Tahun Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Nomor Rangkaian</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Nomor Mesin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Warna</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Warna TNKB</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="" class="col-sm-2 col-form-label">Bahan Bakar</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row flex">
                                        <button class="btn btn-primary" type="submit" id="">Submit Data</button>
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

    // Show and Render User
    var user = function(){
        $(document).ready(function () {
            $.ajax({
                async:false,
                type: "GET",
                url: '{{route('test')}}',
                dataType: "json",
                success: function (response) {
                    $('#renderUser').html(response.html);
                }
            });
        });
    }
    user();

// Create Modal
    $(document).on('click','#addUserbtn', function (e) {
        $('#createModal').modal('show');

    });

    $(document).on('click','.add_user', function (e) {
        e.preventDefault();

        var user = {

        }

        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

        $.ajax({
        type: "POST",
        
        data: user,
        dataType: "json",
        success: function (response) {
            if(response.status == 400){
                $('').html('');

                $(selector).addClass(className);

                $(selector).append(content);
            }
            else if(response.status == 200){
                $(selector).html(htmlString);
                $('').modal('hide');
                $(selector).find(selector2).val('');
                $(selector).removeClass(className);
                $(selector).addClass(className);
                $(selector).text(textString);

            }

            user();
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
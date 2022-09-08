@extends('layouts.app')

@section('content')
    <div class="mt-2 p-4 col-12 min-h-screen">
            <div class="row">
                <div class="d-flex align-items-start">
                    <div class=" col-2 nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active mt-2" id="v-pills-user-tab" data-bs-toggle="pill" data-bs-target="#v-pills-user" type="button" role="tab" aria-controls="v-pills-user" aria-selected="true">User</button>
                        <button class="nav-link mt-2" id="v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form" type="button" role="tab" aria-controls="v-pills-form" aria-selected="false">New User</button>
                    </div>
                    <div class="tab-content offset-1 col-8" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab" tabindex="0">
                            {{-- render data --}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-form" role="tabpanel" aria-labelledby="v-pills-form-tab" tabindex="0">
                            <div>
                                New User Form
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
                    $('#v-pills-user').html(response.html);
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
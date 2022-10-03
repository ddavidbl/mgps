@extends('layouts.app')

@section('content')

        <div class="row p-5 justify-content-evenly ">
            <h2 class="text-center">Fleet Management System Pemerintahan Papua Barat</h2>
            <div class="col-lg-5 col-md-5 col-sm-2 my-4 rounded border border-2 shadow h-auto p-4 position-relative">
                <div class="p-4 text-center">
                    <h3><a href="{{route('loginAdmin')}}" class="text-decoration-none stretched-link">Admin Login</a></h3>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-2 my-4 rounded border border shadow h-auto p-4 position-relative">
                <div class="p-4 text-center">
                    <h3><a href="{{route('login')}}" class="text-decoration-none stretched-link">User Login</a></h3>
                </div>
            </div>
            
        </div>
@endsection
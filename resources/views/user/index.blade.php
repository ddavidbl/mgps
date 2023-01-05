@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h4>Kecepatan</h4>
            <h5 class="text-bold" id="kecepatan"></h5>
            <select name="" id="jumlah_bahan_bakar">
                <option value="">100%</option>
                <option value="">75%</option>
                <option value="">50%</option>
                <option value="">25%</option>
                <option value="">0%</option>
            </select>
        </div>
        <div id="map" class="" style="height: 600px"></div>
        <div>
            <input type="float" disabled class="d-none" id="latValue" name="lat" value="">
            <input type="float" disabled class="d-none" id="lngValue" name="lng" value="">
            <input type="text" disabled class="d-none" id="user_id" value="{{$user->id}}">
            <input type="float" disabled class="d-none" id="kecepatanValue" name="kecepatan" value="">
        </div>
    </div>
@endsection

@push('child-script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        var map, mapL, marker
        map = new L.map('map');
        mapL = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap',
                }).addTo(map);
        marker = new L.marker().addTo(map);

        function locate(){
            if(navigator.geolocation){
                navigator.geolocation.watchPosition((data)=>{
                    var lat = data.coords.latitude;
                    var lng = data.coords.longitude;
                    var kecepatan = data.coords.speed;
                    map.setView([lat,lng],16);
                    marker.setLatLng([lat,lng]);
                    $('#latValue').val(lat);
                    $('#lngValue').val(lng);
                    $('#kecepatan').html(kecepatan);
                    $('#kecepatanValue').val(kecepatan);

                var update = function(){
                $(document).ready(function () {
                    var user_id = $('#user_id').val();
                    var data = {
                    "lat" : $("#latValue").val(),
                    "lng" : $("#lngValue").val(),
                    "kecepatan" : $('#kecepatanValue').val(),
                };

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "Patch",
                    url: `/update/`+user_id,
                    data: data,
                    dataType: "json",
                    success: function (response) {
                    }
                });

                    });
            }
                update();
                })
            }
            else{
                console.alert('Membutuhkan Ijin Lokasi Untuk Menggunakan Fitur Ini')
            }
        }

        locate();
        setInterval(() => {
            locate()
            console.log('loop');
        }, 3000);

    </script>
@endpush
@extends('layouts.app-user')

@section('content')
    <div class="container">
        <div class="text-center">
            <h4>Kecepatan</h4>
            <h5 class="text-bold" id="kecepatan"></h5>
            <label for="">Kondisi Bahan Bakar</label>
            <select name="bahan_bakar" id="jumlah_bahan_bakar">
                <option value="100%">100%</option>
                <option value="75%">75%</option>
                <option value="50%">50%</option>
                <option value="25%">25%</option>
                <option value="0%">0%</option>
            </select>
            <label for="">Status Mesin</label>
            <select name="status" id="status_mesin">
                <option value="Menyala">Menyala</option>
                <option value="Mati">Mati</option>
            </select>
        </div>
        <div id="map" class="" style="height: 600px"></div>
        <div>
            <input type="float" disabled class="d-none" id="latValue" name="lat" value="">
            <input type="float" disabled class="d-none" id="lngValue" name="lng" value="">
            <input type="text" disabled class="d-none" id="user_id" value="{{$user->id}}">
            <input type="double" disabled class="d-none" id="velocity" name="kecepatan" value="">
        </div>
    </div>
@endsection

@push('child-script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        var map, mapL, marker
        map = new L.map('map');
        mapL = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 16,
                    attribution: '© OpenStreetMap',
                }).addTo(map);
        marker = new L.marker().addTo(map);

        function locate(){
            if(navigator.geolocation){
                navigator.geolocation.watchPosition(position);
            }
            else{
                console.alert('Membutuhkan Ijin Untuk Mengakses Lokasi Perangkat Anda');
            }
        }

        function position(data){
            var lat = data.coords.latitude;
            var lng = data.coords.longitude;
            var speed = data.coords.speed;

            map.setView([lat,lng],16);
            marker.setLatLng([lat,lng]).update();

            $('#latValue').val(lat);
            $('#lngValue').val(lng);
            $('#velocity').val(speed);

            var update = function(){
                var user_id = $('#user_id').val();
                var gps_data = {
                    'lat' : $('#latValue').val(),
                    'lng' : $('#lngValue').val(),
                    'bahan_bakar' : $('#jumlah_bahan_bakar').val(),
                    'kecepatan' : $('#velocity').val(),
                    'status' : $('#status_mesin'),
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "patch",
                    url: `/update/`+user_id,
                    data: gps_data,
                    dataType: "json",
                    success: function (response) {}
                });
            }
            update();
        }

        setInterval(() => {
            locate();
        }, 3000);


    </script>
@endpush
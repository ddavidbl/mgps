@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="map" class="" style="height: 600px"></div>
        <div>
            <input type="float" disabled class="d-none" id="latValue" name="lat" value="">
            <input type="float" disabled class="d-none" id="lngValue" name="lng" value="">
            <input type="text" disabled class="d-none" id="user_id" value="{{$user->id}}">
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

        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }else{
                console.alert('Your Device Dont Have Permission For Your Location');
            }
        }

        function showPosition(position){

            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            $('#latValue').val(lat);
            $('#lngValue').val(lng);

            map.setView([lat,lng],16);
            marker.setLatLng([lat,lng]);
            
            var update = function(){
                $(document).ready(function () {
                    var user_id = $('#user_id').val();
                    var data = {
                    "lat" : $("#latValue").val(),
                    "lng" : $("#lngValue").val(),
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
                // setInterval(() => {
                //     update();
                // }, 3000);
        }
        getLocation();
            setInterval(()=>{
                getLocation();
            },2000);
    </script>
@endpush
@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="map" class="" style="height: 600px"></div>
        <div>
            <input type="float" class="hidden" id="latValue" name="lat" value="">
            <input type="float" class="hidden" id="lngValue" name="lng" value="">
        </div>
    </div>
@endsection

@push('child-script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
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
            var map = L.map('map').setView([lat, lng], 16);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap'
                }).addTo(map);
            var marker = L.marker([lat, lng]).addTo(map);
            
            var update = function(){
                $(document).ready(function () {
                    $("#latValue").val(lat);
                    $("#lngValue").val(lng);
                    var data = {
                    "lat" : $("#latValue").val(),
                    "lng" : $("#lngValue").val(),
                };

                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "patch",
                    url: "{{route('update',$user)}}",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        console.log('update data');
                    }
                });

                    });
            }
            update();
        }
        getLocation();
    </script>
@endpush
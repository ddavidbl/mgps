@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="bg-white mx-auto">
            <div id="map" style="height: 600px"></div>
        </div>
    </div>
@endsection

@push('child-script')
    <script src="{{asset('js/jquery.min.js')}}">

        var map = L.map('map').setView([-1.23320750,116.89610100], 19);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);
        
        var render = function(){
                $(document).ready(function () {
                $.ajax({
                    type: "get",
                    url: "/rendermap",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (marker, value) { 
                            var role = value.role;

                            var popup = `${value.name}`; // add card to this popup small one

                            var lat = value.lat;
                            var lng = value.lng;
                            
                            if(lat== null && lng == null){
                                var lat = null;
                                var lng = null;
                            }else{
                                if(role == 2 ){
                                    var icon = "{{asset('img/police-station-pin.png')}}";
                                };
                                var rIcon = L.icon({
                                    iconUrl:icon,
                                    iconAnchor:[16,32],
                                    popupAnchor:[0,-32],
                                });
                                    var marker = L.marker([lat, lng],{icon:rIcon}).addTo(map)
                                    .bindPopup(popup);
                                    
                            }
                            
                        });
                    }
                    
                });
            });
            }
            render(); 
    </script>
@endpush
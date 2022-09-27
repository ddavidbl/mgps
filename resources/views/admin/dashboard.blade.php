@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <div class="bg-white mx-auto p-3 erow">
        <div id="map" class="col-md-12" style="height: 600px"></div>
    </div>
</div>

@endsection

@push('child-script')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
    
        var map = L.map('map').setView([-1.23320750,116.89610100], 19);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

var render = function(){
        $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "{{route('render')}}",
            dataType: "json",
            success: function (data) {
                $.each(data, function (marker, value) { 

                    var popup = `${value.name}`; // add card to this popup small one

                    var lat = value.lat;
                    var lng = value.lng;
                    
                    var icon = `{{asset('storage/')}}/`+value.path;
                
                        var rIcon = L.icon({
                            iconUrl: icon,
                            iconAnchor:[16,32],
                            popupAnchor:[0,-32],
                        });
                            var marker = L.marker([lat, lng],{icon:rIcon}).addTo(map)
                            .bindPopup(popup);                    
                });
            }
        });
    });
    }
    render(); 

    setInterval(() => {
        render();
    }, 3000);



    </script>
@endpush
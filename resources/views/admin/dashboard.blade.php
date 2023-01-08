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
        var map, mapL;
        map = new L.map('map');
        mapL = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 16,
                    attribution: '© OpenStreetMap',
                }).addTo(map);
        map.setView([-0.861453,134.062042],16);

        var fg = L.featureGroup().addTo(map);
        setInterval(function(){
            $.ajax({
                type: "GET",
                url: "{{route('render')}}",
                dataType: "json",
                success: function (data) {
                    fg.clearLayers();
                    $.each(data, function (marker, value) { 
                            // var popup = `${value.username}`; // add card to this popup small one
                            var popup = `<div class="card" style="width: 18rem;">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Petugas ${value.username}</li>
                                                <li class="list-group-item">Bahan Bakar ${value.jumlah_bahan_bakar}</li>
                                                <li class="list-group-item">Kecepatan ${value.kecepatan}</li>
                                                <li class="list-group-item">Status Mesin ${value.status}</li>
                                            </ul>
                                        </div>`;
                            var lat = value.lat;
                            var lng = value.lng;
                            
                            var pin = `{{asset('storage/')}}/`+value.path;
                        
                            var rIcon = L.icon({
                                iconUrl: pin,
                                iconAnchor:[16,32],
                                popupAnchor:[0,-32],
                            });

                            L.marker([lat,lng],{icon:rIcon}).addTo(fg).bindPopup(popup);
                    });
                }
            });
        }, 3000);
    //     var marker = L.marker();

    //     var render = function(){
    //             var n = L.marker();
    //             $.ajax({
    //                 type: "GET",
    //                 url: "{{route('render')}}",
    //                 dataType: "json",
    //                 success: function (data) {
    //                     $.each(data, function (marker, value) { 
    //                         var popup = `${value.username}`; // add card to this popup small one

    //                         var lat = value.lat;
    //                         var lng = value.lng;
                            
    //                         var pin = `{{asset('storage/')}}/`+value.path;
                        
    //                         var rIcon = L.icon({
    //                             iconUrl: pin,
    //                             iconAnchor:[16,32],
    //                             popupAnchor:[0,-32],
    //                         });
    //                         var marker = function(){
    //                             n.setLatLng([lat,lng]).bindPopup(popup).addTo(map);
    //                         }
    //                         marker();
    //                     });
    //                 }
    //             });
                
    //         }

    
    // render(); 

    // setInterval(() => {
    //     render();
    // }, 3000);





    </script>
@endpush
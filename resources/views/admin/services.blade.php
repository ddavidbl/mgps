<select name="service_log" id="service_log" class="form-select">
    <option selected disabled>Jenis Pemeliharaan/Perawatan</option>
    @foreach ( $services as $service)
    <option class="" value="{{$service->service}}">{{$service->service}}</option>
    @endforeach
</select>
<input type="text" class="form-control d-none" id="path" name="path" value="">
<ul class="list-unstyled" id="service_log_alert"></ul>
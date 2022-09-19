<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>Tanggal</th>
            <th>Catatan Service Kendaraan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="">
        @foreach ($logs as $log)
            <tr class="text-center">
                <td>{{$log->id_kendaraan}}</td>
                <td>{{$log->catatan_servis}}</td>
                <td>
                    <button class="btn btn-warning" type="button" id="" value="{{$log->id_kendaraan}}">Edit</button>
                    <button class="btn btn-danger" type="button" id="" value="{{$log->id_kendaraan}}">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
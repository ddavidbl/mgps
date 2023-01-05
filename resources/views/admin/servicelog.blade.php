<table class="table table-striped rounded shadow border border-1">
    <thead>
        <tr class="text-center">
            <th>Tanggal</th>
            <th>Jenis Pemeliharaan</th>
            <th>Detail Pemeliharaan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tableBody-log">
        @foreach ($service_log as $log)
            <tr class="text-center">
                <td>{{$log->created_at}}</td>
                <td>{{$log->jenis_pemeliharaan}}</td>
                <td>{{$log->catatan_pemeliharaan}}</td>
                <td>
                    <button class="btn btn-warning" id="editLog" value="{{$log->id}}"><img src="{{asset('img/edit-white.png')}}" alt=""> Edit</button>
                    <button class="btn btn-danger" id="deleteLog" value="{{$log->id}}"><img src="" alt=""><img src="{{asset('img/trash-white.png')}}" alt=""> Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
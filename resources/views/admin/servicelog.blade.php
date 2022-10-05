<table class="table table-striped rounded shadow border border-1">
    <thead>
        <tr class="text-center">
            <th>Tanggal</th>
            <th>Jenis Pemeliharaan</th>
            <th>Detail Pemeliharaan</th>
        </tr>
    </thead>
    <tbody id="tableBody-log">
        @foreach ($service_log as $log)
            <tr class="text-center">
                <td>{{$log->created_at}}</td>
                <td>{{$log->jenis_pemeliharaan}}</td>
                <td>{{$log->catatan_pemeliharaan}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
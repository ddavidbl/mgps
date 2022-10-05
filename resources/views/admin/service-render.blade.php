<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Perawatan</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        @foreach ($services as $service)
            <tr class="text-center">
                <td>{{$service->id}}</td>
                <td>{{$service->service}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
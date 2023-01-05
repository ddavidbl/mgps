<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>Perawatan</th>
            <td>Action</td>
        </tr>
    </thead>
    <tbody id="tableBody">
        @foreach ($services as $service)
            <tr class="text-center">
                <td>{{$service->service}}</td>
                <td>
                    <button class="btn btn-warning" id="editService" value="{{$service->id}}"><img src="{{asset('img/edit-white.png')}}" alt=""> Edit</button>
                    <button class="btn btn-danger" id="deleteService" value="{{$service->id}}"><img src="" alt=""><img src="{{asset('img/trash-white.png')}}" alt=""> Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
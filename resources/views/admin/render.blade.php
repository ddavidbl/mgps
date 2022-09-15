<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>Data 1</th>
            <th>Data 2</th>
            <th>Data 3</th>
            <th>Data 4</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="text-center">
                <td>{{$user->nomor_registrasi}}</td>
                <td>{{$user->kategori}}</td>
                <td>{{$user->nama_pemilik}}</td>
                <td>
                    <div class="">
                        <button class="btn btn-warning" id="" value="{{$user->id}}">Edit</button>
                        <button class="btn btn-danger" id="" value="{{$user->id}}">Delete</button>
                        <button class="btn btn-primary" id="" value="{{$user->id}}">View</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
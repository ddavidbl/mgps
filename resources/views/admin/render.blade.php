<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>Nomor Registrasi</th>
            <th>Nama Pemilik</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        @foreach ($users as $user)
            <tr class="text-center">
                <td>{{$user->nomor_registrasi}}</td>
                <td>{{$user->nama_pemilik}}</td>
                <td>
                    <div class="">
                        <button class="btn btn-primary" id="openView" value="{{$user->id}}"><img src="{{asset('img/view-white.png')}}" alt=""> Detail</button>
                        <button class="btn btn-warning" id="openEdit" value="{{$user->id}}"><img src="{{asset('img/edit-white.png')}}" alt=""> Ubah</button>
                        <button class="btn btn-secondary" id="openService" value="{{$user->id}}">Perawatan</button>
                        <button class="btn btn-danger" id="openDelete" value="{{$user->id}}"><img src="" alt=""><img src="{{asset('img/trash-white.png')}}" alt=""> Hapus</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
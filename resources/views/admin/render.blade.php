<table class="table table-striped">
    <thead>
        <tr>
            <th>Data 1</th>
            <th>Data 2</th>
            <th>Data 3</th>
            <th>Data 4</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->nomor_registrasi}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
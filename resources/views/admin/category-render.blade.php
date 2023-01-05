<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        @foreach ($categorys as $category)
            <tr class="text-center">
                <td>{{$category->kategori}}</td>
                <td>
                    <button class="btn btn-warning" id="editCategory" value="{{$category->id}}"><img src="{{asset('img/edit-white.png')}}" alt=""> Edit</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
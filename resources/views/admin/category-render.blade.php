<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        @foreach ($categorys as $category)
            <tr class="text-center">
                <td>{{$category->id}}</td>
                <td>{{$category->kategori}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
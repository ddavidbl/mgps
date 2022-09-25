<select name="kategori" id="kategori" class="form-select">
    <option selected disabled>Pilih Kategori</option>
    @foreach ( $kategoris as $kategori)
    <option class="" value="{{$kategori->id}}">{{$kategori->kategori}}</option>
    @endforeach
</select>
<input type="text" class="form-control d-none" id="path" name="path" value="">
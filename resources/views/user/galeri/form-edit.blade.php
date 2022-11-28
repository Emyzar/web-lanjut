@extends("blank")

@section("konten")

    <form action="{{ route("update_galeri", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Galeri : <input type="image" name="lomba"> <br>
        

        <button type="submit">Simpan</button>
    </form>


@endsection
@extends("blank")

@section("konten")

    <form action="{{ route("update_lomba", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Lomba : <input type="text" name="lomba"> <br>
        Informasi: <textarea name="informasi" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection
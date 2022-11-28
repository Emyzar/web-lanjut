@extends("blank")

@section("konten")

    <form action="{{ route("update_nomor_peserta", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        Nomor Peserta: <textarea name="nomor_peserta" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection
@extends("blank")

@section("konten")

    <form action="{{ route('daftar_lomba_daftar', $lomba_id) }}" method="post">
        @csrf

        Lomba : <input type="number" name="nomor"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection

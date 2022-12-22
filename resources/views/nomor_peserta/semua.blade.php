@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $nomor_peserta)
        Nama : {{ $nomor_peserta->peserta->name }} <br>
        Nomor: {{ $nomor_peserta->nomor }} <br>
        Lomba: {{ $nomor_peserta->lomba }} <br>
        <a href="{{ route('ubah_nomor_peserta', ['id' => $nomor_peserta->id]) }}">Ubah</a>
        <a href="{{ route('tampil_nomor_peserta', ['id' => $nomor_peserta->id]) }}">Tampil</a>

        <form action="{{ route('hapus_nomor_peserta', ['id' => $nomor_peserta->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection

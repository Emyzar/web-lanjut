@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $kategori)
        Galeri : {{ $galeri->galeri }} <br>
        Lomba: {{ $galeri->lomba }} <br>
        <a href="{{ route('ubah_galeri', ['id' => $galeri->id]) }}">Ubah</a>
        <a href="{{ route('tampil_galeri', ['id' => $galeri->id]) }}">Tampil</a>

        <form action="{{ route('hapus_galeri', ['id' => $galeri->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection
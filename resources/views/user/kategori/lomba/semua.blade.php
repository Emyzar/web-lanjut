@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $lomba)
        Lomba : {{ $lomba->nama }} <br>
        Informasi: {{ $lomba->informasi }} <br>
        Kategori: {{ $lomba->kategori->nama }} <br>
        <a href="{{ route('ubah_lomba', ['id' => $lomba->id]) }}">Ubah</a>
        <a href="{{ route('tampil_lomba', ['id' => $lomba->id]) }}">Tampil</a>

        <form action="{{ route('hapus_lomba', ['id' => $lomba->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection
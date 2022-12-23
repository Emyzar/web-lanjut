@extends("blank")

@section("konten")
@if($validasi)
    Anda sudah terdaftar dengan nomor peserta : {{$nomor_peserta->nomor}} - {{$nomor_peserta->nama}}
@else
    <form action="{{ route('daftar_lomba_daftar', $lomba_id) }}" method="post">
        @csrf

        Nomor Peserta : <input type="number" name="nomor"> <br>

        <button type="submit">Simpan</button>
    </form>
@endif


@endsection

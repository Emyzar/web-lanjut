@extends("blank")

@section("konten")
    <h1>Semua Data</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Informasi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Create At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $lomba)
            <tr>
                <th scope="row">{{$lomba->id}}</th>
                <td>{{$lomba->nama}}</td>
                <td>{{$lomba->informasi}}</td>
                <td>{{$lomba->kategori->nama}}</td>
                <td>{{$lomba->created_at}}</td>
                <td>{{$lomba->updated_at}}</td>
                <td>
                    <a href="{{ route('ubah_lomba', ['id' => $lomba->id]) }}">Daftar Lomba</a>
{{--                    <a href="{{ route('tampil_lomba', ['id' => $lomba->id]) }}">Tampil</a>--}}

{{--                    <form action="{{ route('hapus_lomba', ['id' => $lomba->id]) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        <button type="submit">Hapus</button>--}}
{{--                    </form>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

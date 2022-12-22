@extends("blank")

@section("konten")

    <a class="btn btn-primary" href="{{route('buat_kategori')}}">Add</a>


    <h1>Semua Data</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Create At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $kategori)
            <tr>
                <th scope="row">{{$kategori->id}}</th>
                <td>{{$kategori->nama}}</td>
                <td>{{$kategori->keterangan}}</td>
                <td>{{$kategori->created_at}}</td>
                <td>{{$kategori->updated_at}}</td>
                <td>
                    <a href="{{ route('ubah_kategori', ['id' => $kategori->id]) }}">Ubah</a>
                    <a href="{{ route('tampil_kategori', ['id' => $kategori->id]) }}">Tampil</a>

                    <form action="{{ route('hapus_kategori', ['id' => $kategori->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

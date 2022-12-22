@extends("blank")

@section("konten")
    <a class="btn btn-primary" href="{{route('buat_galeri')}}">Add</a>

    <h1>Semua Data</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Lomba</th>
            <th scope="col">Create At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $galeri)
            <tr>
                <th scope="row">{{$galeri->id}}</th>
                <td>{{$galeri->galeri}}</td>
                <td>{{$galeri->lomba->lomba}}</td>
                <td>{{$galeri->created_at}}</td>
                <td>{{$galeri->updated_at}}</td>
                <td>
                    <a href="{{ route('ubah_galeri', ['id' => $galeri->id]) }}">Ubah</a>
                    <a href="{{ route('tampil_galeri', ['id' => $galeri->id]) }}">Tampil</a>

                    <form action="{{ route('hapus_galeri', ['id' => $galeri->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

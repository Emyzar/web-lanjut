@extends("blank")

@section("konten")

    <a class="btn btn-primary" href="{{route('buat_lomba')}}">Add</a>

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
                <td>{{$lomba->lomba}}</td>
                <td>{{$lomba->informasi}}</td>
                <td>{{$lomba->kategori->nama}}</td>
                <td>{{$lomba->created_at}}</td>
                <td>{{$lomba->updated_at}}</td>
                <td>
                    <a href="{{ route('tampil_galeri', ['lomba_id' => $lomba->id]) }}">Galeri</a>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

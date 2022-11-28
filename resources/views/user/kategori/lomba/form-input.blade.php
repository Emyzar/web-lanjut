@extends("blank")

@section("konten")

    <form action="{{ route('simpan_lomba') }}" method="post">
        @csrf

        Lomba : <input type="text" name="lomba"> <br>
        Informasi: <textarea name="informasi" id="" cols="30" rows="10"></textarea> <br>
        Kategori:
        <select name="kategori">
            @foreach($kategori as $item)
            <option value="{{$item->id}}">
                {{$item->nama}}
            </option>
            @endforeach
        </select>


        <button type="submit">Simpan</button>
    </form>


@endsection
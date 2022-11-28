@extends("blank")

@section("konten")

    <form action="{{ route('simpan_galeri') }}" method="post" enctype="multipart/form-data">
        @csrf

        Galeri : <input type="file" name="image"> <br>
        Lomba:
        <select name="lomba">
            @foreach($lomba as $item)
            <option value="{{$item->id}}">
                {{$item->lomba}}
            </option>
            @endforeach
        </select>
        

        <button type="submit">Simpan</button>
    </form>


@endsection
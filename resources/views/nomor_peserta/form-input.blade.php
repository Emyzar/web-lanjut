@extends("blank")

@section("konten")

    <form action="{{ route("simpan_nomor_peserta") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Nomor: <textarea name="nomor" id="" cols="30" rows="10"></textarea> <br>
        Lomba:
        <select name="lomba">
            @foreach($lomba as $item)
            <option value="{{$item->id}}">
                {{$item->lomba}}
            </option>
            @endforeach
        </select>

        Peserta:
        <select name="peserta">
            @foreach($peserta as $item)
            <option value="{{$item->id}}">
                {{$item->name}}
            </option>
            @endforeach
        </select>

        <button type="submit">Simpan</button>
    </form>


@endsection
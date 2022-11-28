@extends("blank")

@section("konten")
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif

    <form action= "{{ route("user_update", ['id' =>$id]) }}" method="post">
        @csrf
        @method("put")
        Nama : <input tupe="text" name="nama"> <br>
        Username : <input tupe="text" name="username"> <br>
        Email : <input tupe="text" name="email"> <br>
        Password : <input tupe="text" name="password"> <br>
        Level : <input tupe="text" name="level"> <br>
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

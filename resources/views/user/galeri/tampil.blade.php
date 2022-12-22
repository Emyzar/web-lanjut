@extends("blank")

@section("konten")
    <a class="btn btn-primary" href="{{route('buat_galeri')}}">Add</a>
    <div class="row">
        @foreach($galeri as $item)
            <img src="{{asset('image').'/'.$item->galeri}}" class="col-2 img-thumbnail">
        @endforeach
    </div>
@endsection

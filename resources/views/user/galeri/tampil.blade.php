@extends("blank")

@section("konten")

    <img src="{{asset('image').'/'.$galeri->galeri}}">

    {{ $galeri->galeri }}

@endsection
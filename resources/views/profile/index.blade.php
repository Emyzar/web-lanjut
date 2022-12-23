@extends("blank")
@section("konten")



    <table class="table">
        <tbody>
{{--            <tr>--}}
{{--                <td>{{$user->nama}}</td>--}}
{{--                <td>{{$user->email}}</td>--}}
{{--                <td>{{$user->lomba ? $user->lomba->lomba : ''}}</td>--}}
{{--                <td>{{$user->created_at}}</td>--}}
{{--                <td>{{$user->updated_at}}</td>--}}
{{--                <td>--}}
{{--                    <a href="{{ route("user_edit", ["id" => $user->id]) }}">edit</a>--}}
{{--                    <a href="{{ route("user_show", ["id" => $user->id]) }}">show</a>--}}

{{--                    <form action="{{ route("user_hapus", ['id' => $user->id]) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method("delete")<button type="submit">hapus</button>--}}
{{--                    </form>--}}
{{--            </tr>--}}
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{auth()->user()->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{auth()->user()->email}}</td>
            </tr>
        </tbody>
    </table>

@endsection

@extends("blank")
@section("konten")



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Lomba</th>
      <th scope="col">Create At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_user as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->nama}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->lomba ? $user->lomba->lomba : ''}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
      <td>
        <a href="{{ route("user_edit", ["id" => $user->id]) }}">edit</a>
        <a href="{{ route("user_show", ["id" => $user->id]) }}">show</a>

        <form action="{{ route("user_hapus", ['id' => $user->id]) }}" method="post">
          @csrf
          @method("delete")<button type="submit">hapus</button>
</form>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

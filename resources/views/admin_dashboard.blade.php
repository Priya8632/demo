@include('header');

<h1>admin</h1>

<a href="{{url('logout')}}" class="btn btn-danger" type="submit">Logout</a>

<div class="container table table-responsive">
    <table class="table text-center">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>gender</th>
                <th>image</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr>
                <td>{{$record->id}}</td>
                <td>{{$record->name}}</td>
                <td>{{$record->email}}</td>
                <td>{{$record->password}}</td>
                <td>{{$record->gender}}</td>
                <td>{{$record->image}}</td>
                <td><a href="delete/{{$record->id}}" class="btn btn-danger">delete</a></td>
                <td><a href="edit/{{$record->id}}" class="btn btn-success">update</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container pagination">
        {{$records->links()}}
    </div>
</div>
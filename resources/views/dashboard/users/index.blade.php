<a href="/dashboard/users/create" class="btn btn-success float-right my-2">
    <i class="fa fa-plus" aria-hidden="true"></i> Create new user
</a>

<table class="table table-hover">
    <thead>
    <tr>
        <th>User #</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>User since</th>
        <th>Logged in</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{!! ($user->remember_token != null ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-times" aria-hidden="true"></i>') !!}</td>
            <td><a href="/dashboard/users/edit/{{ $user->id }}"><i class="fa fa-pencil"
                                                                         aria-hidden="true"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $users->links() }}
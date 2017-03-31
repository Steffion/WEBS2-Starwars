<h2>New user</h2>

<hr>

<div class="panel-body">

    @include('layouts.partials.errors')

    <form action="/dashboard/users/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input class="form-control" type="text" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" type="password" id="password" name="password">
            </div>
        </div>
        <div class="form-group row float-right">
            <button onclick="window.history.back()" type="button" class="btn m-2">
                <i class="fa fa-ban" aria-hidden="true"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success m-2">
                <i class="fa fa-plus" aria-hidden="true"></i> Create new user
            </button>
        </div>
    </form>
</div>
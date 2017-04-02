<h2>Edit profile</h2>

<hr>

<div class="panel-body">

    @include('layouts.partials.errors')

    <form action="/dashboard/account/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $account->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $account->email }}" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" type="password" id="password" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="password_confirmation" class="col-2 col-form-label">Password confirmation</label>
            <div class="col-10">
                <input class="form-control" type="password" id="password" name="password_confirmation">
            </div>
        </div>
        <div class="form-group row float-left">
            <a href="/dashboard/account/delete" class="btn btn-danger m-2">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete account
            </a>
        </div>
        <div class="form-group row float-right">
            <button type="submit" class="btn btn-success m-2">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save account
            </button>
        </div>
    </form>
</div>
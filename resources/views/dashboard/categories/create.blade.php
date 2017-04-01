<h2>New category</h2>

<hr>

<div class="panel-body">

    @include('layouts.partials.errors')

    <form action="/dashboard/categories/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="parent" class="col-sm-2 col-form-label">Parent</label>
            <div class="col-sm-10">
                <select id="parent" name="parent" class="custom-select">
                    <option selected>None</option>
                    @foreach($categories as $category)
                        @continue($category->parent != null)

                        <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row float-right">
            <button onclick="window.history.back()" type="button" class="btn m-2">
                <i class="fa fa-ban" aria-hidden="true"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success m-2">
                <i class="fa fa-plus" aria-hidden="true"></i> Create new category
            </button>
        </div>
    </form>
</div>
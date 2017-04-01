<h2>Edit category</h2>

<hr>

<div class="panel-body">

    @include('layouts.partials.errors')

    <form action="/dashboard/categories/edit/{{ $category->name }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="parent" class="col-sm-2 col-form-label">Parent</label>
            <div class="col-sm-10">
                <select id="parent" name="parent" class="custom-select">
                    <option {{ ($category->name == null ? 'selected' : '') }}>None</option>
                    @foreach($categories as $parent)
                        @continue($parent->parent != null)

                        <option value="{{ $parent->name }}" {{ ($parent->name == $category->parent ? 'selected' : '') }}>{{ ucfirst($parent->name) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row float-left">
            <a href="/dashboard/categories/delete/{{ $category->name }}" class="btn btn-danger m-2">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete category
            </a>
        </div>
        <div class="form-group row float-right">
            <button onclick="window.history.back()" class="btn m-2">
                <i class="fa fa-ban" aria-hidden="true"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success m-2">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save category
            </button>
        </div>
    </form>
</div>
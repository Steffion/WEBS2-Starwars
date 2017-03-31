<h2>New product</h2>

<hr>

<div class="panel-body">

    @include('layouts.partials.errors')

    <form action="/dashboard/products/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-2 col-form-label">Price</label>
            <div class="col-10">
                <input class="form-control" type="text" value="0.00" id="price" name="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <select id="category" name="category" class="custom-select">
                    <option selected>Please choose a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Thumbnail</label>
            <div class="col-sm-10">
                <label class="custom-file">
                    <input type="file" id="thumbnail" name="thumbnail" class="custom-file-input" accept="image/*">
                    <span class="custom-file-control"></span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="10"></textarea>
        </div>
        <div class="form-group row float-right">
            <button onclick="window.history.back()" class="btn m-2">
                <i class="fa fa-ban" aria-hidden="true"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success m-2">
                <i class="fa fa-plus" aria-hidden="true"></i> Create new product
            </button>
        </div>
    </form>
</div>